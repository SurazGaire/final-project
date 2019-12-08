<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Service;
use App\address;
use App\RequestedServices;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::where(
            'verified',1
        )->get();
        return view('admin.employees.employees', compact('employees'));
    }
    
    public function verify_employee($id){
        
        $employees=Employee::find($id);
        if($employees->verified == 0){
            $employees->verified = 1;
            $employees->save();
            return redirect()->back()->with('success','Employee Verified');
        

        }
    }
            





    //Unvarified Employee for Admin

    public function unvarified_employee(){
        $uemployees=Employee::where(
            'verified',0
        )->get();
        return view('admin.employees.unvarifiedemployees',compact('uemployees'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $address = address::all();
        $services = Service::all();
        return view('admin.employees.create', compact('address', 'services'));
    }
    public function edit_details($id)
    {
        $emp = Employee::find($id);
        $services = Service::all();
        $address = address::all();
        return view('employee.editdetails', compact('emp', 'services', 'address'));
    }

    public function update_details(Request $request, $id)
    {
        $nachaiyeko_id = $id;
        // dd($request);
        $emp = Employee::find(Auth::guard('employee')->user()->id);
        $emp->fname = $request->fname;
        $emp->email = $request->email;
        $emp->address = $request->address;
        $emp->service = $request->service;
        $emp->phone = $request->phone;
        $emp->save();
        return \redirect(route('employee.dashboard'))->with('success','Sucessfully Updated');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'confirm_password' => 'required| same:password',
            'email' => 'required|unique:employees|email',
        ]);
        $image = $request->image;
        $name = time() . $image->getClientOriginalName();
        $image->move('uploads/employee_images', $name);
        Employee::create([
            'fname' => $request->fname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => bcrypt($request->password),
            'service' => $request->service,
            'image' => '/uploads/employee_images/' . $name,
            'verified' => 0,
            'status'=>'Available',
            'added_by_admin' => 1,

        ]);
        return redirect(route('employees'))->with('success', 'Employee Added Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $emp = Employee::find($id);
        return view('admin.employees.edit', compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emp = Employee::findOrFail($id);
        $emp->fname = $request->fname;
        $emp->email = $request->email;
        $emp->address = $request->address;
        $emp->phone = $request->phone;
        $emp->service = $request->service;
        $emp->save();
        return \redirect(route('employees'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::find($id)->delete();
        return redirect()->back()->with('success', 'Employee Deleted Sucessfully');
    }

    public function dashboard()
    {
        
        $employee_id = Auth::guard('employee')->user()->id;
        $employee = Employee::find($employee_id);
        $service_name = $employee->service;
        $requested_service = RequestedServices::all();

        $req_count = count(RequestedServices::where([
            ['address', $employee->address],
            ['service_name', $service_name],
            ['status','Available'],
        ])->get());

        $ongoing_count = count(RequestedServices::where([
            ['address', $employee->address],
            ['service_name', $service_name],
            ['status','Ongoing'],
        ])->get());

        $completed_count = count(RequestedServices::where([
            ['address',$employee->address],
            ['service_name',$service_name],
            ['status','Completed'],
            ])->get());
            
        return view('employee.dashboard',compact('req_count','ongoing_count','completed_count','employee_id','employee'));
    
    
}



    public function view_service_request()
    {
        $employee_id = Auth::guard('employee')->user()->id;
        $employee = Employee::find($employee_id);
        $service_name = $employee->service;
        $requested_services = RequestedServices::where([
            ['address', $employee->address],
            ['service_name', $service_name],
            ['assigned_by_admin','0'],
        ])->get();
        return view('employee.view_service_requests', compact('requested_services'));
    }

    public function assigned_by_admin()
    {  
        $employee_id = Auth::guard('employee')->user()->id;
        $employee = Employee::find($employee_id);
        $service_name = $employee->service;
        $requested_services = RequestedServices::where([
            ['address', $employee->address],
            ['service_name', $service_name],
            ['assigned_by_admin','1'],
        ])->get();
        return view('employee.assignedbyadmin', compact('requested_services'));
    }

    public function change_employee_status_completed($id){
        $requested_service = RequestedServices::find($id);
        if($requested_service->status == "Ongoing"){
            $requested_service->status="Completed";
            $employee = Employee::find($requested_service->employee_id);
            $employee->status = 'Available';
            $employee->save();
            $requested_service->save();
            return \redirect()->back();
        }

    }

}
