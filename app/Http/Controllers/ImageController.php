<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery=Gallery::all();
        return view('admin.images.images',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('admin.images.create');
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
        Gallery::create([
            'desc'=>$request->desc,
            'image' => '/uploads/gallery/' . $name,
        ]);
        return \redirect(route('images'));
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
        
            $gal = Gallery::find($id);
            return view('admin.images.edit', compact('gal'));
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
        $gal = Gallery::findOrFail($id);
        $gal->desc = $request->desc;
        //$ser->image = $request->image;
        if($request->hasFile('image')){

            $image = $request->image;
            $name=time().$image->getClientOriginalName();
            $image->move('uploads/gallery',$name);
            $gal->image='/uploads/gallery/'.$name;
        }
        $gal->save();
        return \redirect(route('images'))->with('success','Updated Sucessfully');
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
