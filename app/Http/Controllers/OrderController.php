<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function verifyPayment(Request $request){
        // dd($request);
        $args = http_build_query(array(
            'token' => $request['token'],
            'amount' => $request['amount'],
        ));

        $url = 'https://khalti.com/api/v2/payment/verify/';
        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = ['Authorization: Key test_secret_key_b38ddd4c269244c0939c93f10f4faafc'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $token = json_decode($response, TRUE);
        // print($response);
        // Cuisine::create([
        //     'name' => $request->response,
        // ]);
        return $response;
        if (isset($token['idx']) && $status_code == 200) {
            // dd($response);
            return true;
        }
        return false;
    }

    public function makeOrder(Request $request)
    {
       
        $response = $request['response'];

        $service_id = $request->service_id;
        if ($response['state']['name'] == 'Completed') {
            if(!CustomerPackage::where([
                ['customer_id',Auth::guard('customer')->user()->id],
                ['service_id',$service_id],
                ['package_name','bpack']
            ])->exists()){
            $customer_package = CustomerPackage::create([
                'customer_id' => Auth::guard('customer')->user()->id,
                'service_id' => $service_id,
                'package_name' => 'bpack',
            ]);
            }

        
        }
        return redirect()->back()->with('sucess','Thank You!!You have got the Basic package.');
        
        // return view('welcome', compact('response'));
        // dd($request->response);
    }


//FOr Valued Package
    public function verifyPayment1(Request $request){
        // dd($request);
        $args = http_build_query(array(
            'token' => $request['token'],
            'amount' => $request['amount'],
        ));

        $url = 'https://khalti.com/api/v2/payment/verify/';
        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = ['Authorization: Key test_secret_key_b38ddd4c269244c0939c93f10f4faafc'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $token = json_decode($response, TRUE);
        // print($response);
        // Cuisine::create([
        //     'name' => $request->response,
        // ]);
        return $response;
        if (isset($token['idx']) && $status_code == 200) {
            // dd($response);
            return true;
        }
        return false;
    }
    
    public function makeOrder_valued_package(Request $request)
    {
        $response = $request['response'];
        $service_id = $request->service_id;
        if ($response['state']['name'] == 'Completed') {
            if(!CustomerPackage::where([
                ['customer_id',Auth::guard('customer')->user()->id],
                ['service_id',$service_id],
                ['package_name','vpack']
            ])->exists()){
            $customer_package = CustomerPackage::create([
                'customer_id' => Auth::guard('customer')->user()->id,
                'service_id' => $service_id,
                'package_name' => 'vpack',
            ]);
            }
        }
        return redirect()->back()->with('sucess','Thank You!!You have got the Valued package.');
    }

    //Unlimited Package
    public function verifyPayment2(Request $request){
        // dd($request);
        $args = http_build_query(array(
            'token' => $request['token'],
            'amount' => $request['amount'],
        ));

        $url = 'https://khalti.com/api/v2/payment/verify/';
        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = ['Authorization: Key test_secret_key_b38ddd4c269244c0939c93f10f4faafc'];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $token = json_decode($response, TRUE);
        // print($response);
        // Cuisine::create([
        //     'name' => $request->response,
        // ]);
        return $response;
        if (isset($token['idx']) && $status_code == 200) {
            // dd($response);
            return true;
        }
        return false;
    }

    public function makeOrder_unlimited_package(Request $request)
    {
        $response = $request['response'];
        $service_id = $request->service_id;
        if ($response['state']['name'] == 'Completed') {
            if(!CustomerPackage::where([
                ['customer_id',Auth::guard('customer')->user()->id],
                ['service_id',$service_id],
                ['package_name','upack']
            ])->exists()){
            $customer_package = CustomerPackage::create([
                'customer_id' => Auth::guard('customer')->user()->id,
                'service_id' => $service_id,
                'package_name' => 'upack',
            ]);
            }
        }
        
            return redirect()->back()->with('sucess','Thank You!!You have got the Unlimited package.');
        }
    


}