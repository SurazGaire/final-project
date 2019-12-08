<?php

namespace App\Http\Controllers;

use App\Customer;
use App\RequestedServices;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\address;
class RequestedServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function request_service()
    {
        $user_id = Auth::guard('customer')->id();
        $user = Customer::find($user_id);
        $services = Service::all();
        $employees = Employee::all();
        $address=address::all();
       return view('customer.schedule_service',compact('user','services','employees','address'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'hearAbout' => 'required',
            'message' => 'required',
            'service_time' => 'required',
            
        ]);
        RequestedServices::create([
            'user_id' => Auth::guard('customer')->id(),
            'service_name' => $request->service_name,
            'message' => $request->message,
            'hear_about_us' => $request->hearAbout,
            'time' => $request->service_time,
            'address' => $request->address,
            'status' => 'Available',
            'assigned_by_admin'=> '0',
        ]);
        return \redirect()->back()->with('success','Requested Sucessfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function change_status($id){
        $requested_service = RequestedServices::find($id);
        if($requested_service->status == 'Available'){
            $requested_service->status = 'Ongoing';
            $requested_service->employee_id = Auth::guard('employee')->user()->id;
            $employee = Employee::find(Auth::guard('employee')->user()->id);
            $employee->status = 'Busy';
            $employee->save();
            $requested_service->save();
            return \redirect()->back();
        }
    

    }

    public function change_status_completed($id){
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

    public function show_status($id){
     
            $employee = Employee::find(Auth::guard('employee')->user()->id);
    
           if( $employee->status == "Available"){
            $employee->status = "Busy";
            $employee->save();
           
            return \redirect(route('employee.dashboard'))->with('success','You are now Unavailable');
        }
    }
    public function change_show_status($id){
     
        $employee = Employee::find(Auth::guard('employee')->user()->id);

       if( $employee->status == "Busy"){
        $employee->status = "Available";
        $employee->save();
       
        return \redirect(route('employee.dashboard'))->with('success','You are now Available');
    }
}
    

}
