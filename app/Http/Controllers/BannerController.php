<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $banner = Banner::all()->sortByDesc('id');
       return view('backend.banner.banner',compact('banner'));
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
        $banner = new Banner;
        $banner->title = $request->title;
        $banner->dec = $request->dec;
        $banner->status = $request->status;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = 'banner-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/backend/assets/images/banner/',$image_name);
            $banner->image = $image_name;
         }
         $banner->save();
        return response()->json(['success'=>'Data Add successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if(!is_null($banner)){
            $image_path = public_path().'/backend/assets/images/banner/'.$banner->image;
            unlink($image_path);
            $banner->delete();
            return response()->json(['success'=>'Data Delete successfully.']);
        }
    }
    public function bannerstatus($id,$status){
        $banner = Banner::find($id);
        $banner->status = $status;
        $banner->update();
        return response()->json(['success'=>'Status changed successfully.']);
    }
}
