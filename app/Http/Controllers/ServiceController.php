<?php

namespace App\Http\Controllers;

use App\RequestedServices;
use Illuminate\Http\Request;
use App\Service;
use App\Employee;
use App\Price;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
    
        return view("admin.services.services", compact('services'));
    }
    public function request_service()
    {
      $requested_services = RequestedServices::all();
        return view('admin.services.view_requested_services',compact('requested_services'));
    }

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->image;
        $name = time() . $image->getClientOriginalName();
        $image->move('uploads/services' , $name);
        Service::create([
            'sname' => $request->sname,
            'desc' => $request->desc,
            'image' => 'uploads/services/' . $name,
        ]);
        return \redirect(route('services'));
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
        $ser = Service::find($id);
        return view('admin.services.edit', compact('ser'));
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
        $ser = Service::findOrFail($id);

        if($request->hasFile('image')){

            $image = $request->image;
            $name=time().$image->getClientOriginalName();
            $image->move('uploads/services',$name);
            $ser->image='/uploads/services/'.$name;
        }
        $ser->sname = $request->sname;
        $ser->desc = $request->desc;
        $ser->bpack=$request->bpack;
        $ser->vpack=$request->vpack;
        $ser->upack=$request->upack;
    
        $ser->save();
        return \redirect(route('services'))->with('success','Details Updated Sucessfully');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect()->back();
    }

    public function assign_service($id)
    {
        $service_id = $id;
        $service = RequestedServices::find($id);
        $employees = Employee::where([
            ['status','Available'],
            ['address',$service->address],
            ['service',$service->service_name],
            ])->get();
            return view('admin.services.assign_service',compact('employees','service_id'));
    }

    public function assign_service_employee($service_id,$employee_id){
        $service = RequestedServices::find($service_id);
        $employee = Employee::find($employee_id);
        // dd($service_id,$employee_id);
        $service->status = 'Ongoing';
        $employee->status = 'Busy';
        $service->assigned_by_admin = '1';
        $service->employee_id= $employee_id;
        $service->save();
        $employee->save();
        return redirect(route('service.requests'))->with('success','Employee assigned Successfully');


    }

        public function change_status_request($id){
            $requested_service = RequestedServices::find($id);
            if($requested_service->status == 'Available'){
                $requested_service->status = 'Ongoing';
                return \redirect()->back();
            }
    }


}
