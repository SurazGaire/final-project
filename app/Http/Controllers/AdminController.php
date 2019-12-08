<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\Customer;
use App\Employee;
use App\RequestedServices;

class AdminController extends Controller
{
    public function index()
    {
        $employees_count=Employee::count();       
         $req_services_count=RequestedServices::count();
         $customers_count=Customer::count();

         $ongoing_count = count(RequestedServices::where('status','Ongoing')->get());
         $incomplete_count = count(RequestedServices::where
         ('status','!=','Completed')->get());


           


            
        return view('admin.index',compact('req_services_count','employees_count','customers_count','ongoing_count','incomplete_count'));
       
    }

    public function login()
    {
        
        return view('admin.login');
    }

    public function validateLogin(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            Auth::guard('employee')->logout();
            return redirect(route('admin.dashboard'));
        } else {
            return redirect()->back()->with('error','Login Error,Please try again');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.login'));
    }

    

}
