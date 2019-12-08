<?php

namespace App\Http\Controllers;

use App\address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\Service;

class EmployeeLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('employee.employeelogin');
    }

    public function logout(){
        Auth::guard('employee')->logout();
        return redirect(route('/'));
    }


    public function register()
    {
      $address=address::all();
      $services=Service::all();
      

        return view('customer.registeremployee',compact('address','services'));
    }

    public function validateLogin(Request $request){
        if (Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password])) {
            Auth::guard('admin')->logout();
            if(Auth::guard('employee')->user()->verified){
                return redirect(route('employee.dashboard'));
            }
            else{
            return redirect()->back()->with('error','Your registration is not verified, Please try again after some time');

            }
            
        } else {
            return redirect()->back()->with('error','Email/Password Incorrect');
        }
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
        $this->validate($request, [
            'password' => 'required',
            'confirm_password' => 'required| same:password',
            'image' => 'required|image',
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
            'added_by_admin' => 0,
        ]);
        return redirect(route('get_a_job'))->with('success', 'Employee Added Sucessfully');
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
}
