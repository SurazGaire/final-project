<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Service;
use App\SlideDesc;
use App\Gallery;
use App\Employee;
use App\RequestedServices;
use App\TimeDesc;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $slideDesc=SlideDesc::all();
        $service_desc=SlideDesc::first();
        $galleries=Gallery::all();
        $employees=Employee::all();
        $time_desc=TimeDesc::first();
     
        return view('customer.index',compact('slideDesc','services','service_desc', 'galleries','employees','time_desc'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    //Customer Profile
    public function customer_Profile(){
       
        $customer=Customer::find(Auth::guard('customer')->user()->id);
        return view('customer.profile',compact('customer'));
    }

    public function request_log(){
       
       
     
        $requested_services = RequestedServices::where('user_id',(Auth::guard('customer')->user()->id))->get()      ;
       
        return view('customer.requestlog',compact('requested_services'));
    }


    //For Want a Job

    public function get_a_job(){
       
        return view('customer.wantajob');
    }

    public function update_rate(Request $request){
       
        $requested_services = RequestedServices::where('user_id',(Auth::guard('customer')->user()->id))->where('id',$request['requested_service_id'])->first() ;
        $requested_services->rate=$request['rate'];
        $requested_services->save();
        return redirect('customer/request_log');
       
    }

//For Annual Maintainenance Controller

    public function amc()
    {
        
        $services=Service::all();
       
       return view('customer.amc',compact('services'));
    }

    
    public function service_details($id)
    {
        $services =Service::find($id);
        
        
       return view('customer.services.service_details',compact('services'));
    }

    public function basic_package($id)
    {
        $services =Service::find($id);

        
        
       return view('customer.services.basic_package',compact('services'));
    }

    public function valued_package($id)
    {
        $services =Service::find($id);

        
        
       return view('customer.services.valued_package',compact('services'));
    }

    public function unlimited_package($id)
    {
        $services =Service::find($id);

        
        
       return view('customer.services.unlimited_package',compact('services'));
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
}
