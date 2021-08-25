<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ServiceController extends Controller
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
        $service = Service::all();
        return view('backend.service.service',compact('service'));
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
        $slug=Str::slug($request->name);
        $service = new Service;
        $service->name = $request->name;
        $service->description = $request->description;
        $service->status = $request->status;
        $service->slug = $slug.'-'.date('ymdis').'-'.rand(0,999);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = 'service-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/backend/assets/images/service/',$image_name);
            $service->image = $image_name;
         }
         $service->save();
         return response()->json(['success'=>'Data Add successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('backend.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->name = $request->name;
        $service->description = $request->description;
        if($request->hasFile('image')){
            $destination = public_path().'/backend/assets/images/service/'.$service->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/backend/assets/images/service/',$image_name);
            $service->image = $image_name;
        }
        $service->update();
        return redirect()->route('service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if(!is_null($service)){
            $image_path = public_path().'/backend/assets/images/service/'.$service->image;
            unlink($image_path);
            $service->delete();
            return response()->json(['success'=>'Data Delete successfully.']);
        }
    }
    public function servicestatus($id,$status){
        $service = Service::find($id);
        $service->status = $status;
        $service->update();
        return response()->json(['success'=>'Status changed successfully.']);
    }
}
