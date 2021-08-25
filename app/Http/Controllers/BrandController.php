<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $brand = Brand::get();
        return view('backend.brand.brand',compact('brand'));
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
        $brand = new Brand;
        $brand->name = $request->name;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = 'brand-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/backend/assets/images/brand/',$image_name);
            $brand->image = $image_name;
        }
        $brand->save();
         return response()->json(['success'=>'Data Add successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.brand.edit',compact('brand'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->name;
        if($request->hasFile('image')){
            $destination = public_path().'/backend/assets/images/brand/'.$brand->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $image = $request->file('image');
            $image_name = 'brand-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/backend/assets/images/brand/',$image_name);
            $brand->image = $image_name;
        }
        $brand->update();
        return redirect()->route('brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        if(!is_null($brand)){
            $image_path = public_path().'/backend/assets/images/brand/'.$brand->image;
            unlink($image_path);
            $brand->delete();
            return response()->json(['success'=>'Data Delete successfully.']);
        }
    }
}
