<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitesetting;
use App\SlideDesc;
use App\TimeDesc;
use Intervention\Image\Facades\Image;

class SiteSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $settings= Sitesetting::first();
        return view('admin.sitesettings.site_setting',compact('settings'));
    }

    public function slideDesc()
    {
        return view('admin.sitesettings.slidedesc');
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
        $image = $request->image;
        $name = time() . $image->getClientOriginalName();
        $image->move('uploads/gallery' , $name);
        SlideDesc::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => '/uploads/gallery/' . $name,
        ]);
        return \redirect(route('sitesettings'));
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
    public function update(Request $request)
    {
      $settings=Sitesetting::first();
      $settings->name=$request->name;
      $settings->email=$request->email;
      $settings->address=$request->address;
      $settings->phone=$request->phone;
      $settings->e_phone=$request->e_phone;
      $settings->facebook=$request->facebook;
      $settings->twitter=$request->twitter;
      $settings->instagram=$request->instagram;
      $settings->save();
      return redirect(route('sitesettings'));
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

    public function time_desc(){
        $time_desc=TimeDesc::first();
        return view('admin.sitesettings.timedesc',compact('time_desc'));
    }

    public function time_desc_store(Request $request)
    {
        TimeDesc::create([
            'weekdays' => $request->weekdays,
            'weekdays_time' => $request->weekdays_time,
            'weekends' => $request->weekends,
            'weekends_time' => $request->weekends_time,
        ]);
        return \redirect(route('sitesettings'));

    }

    public function time_desc_update(Request $request)
    {
      $settings=TimeDesc::first();
      $settings->weekdays=$request->weekdays;
      $settings->weekdays_time=$request->weekdays_time;
      $settings->weekends=$request->weekends;
      $settings->weekends_time=$request->weekends_time;
      $settings->save();
      return redirect(route('sitesettings.time_desc'))->with('success','Updated Sucessfully');
    }
}
