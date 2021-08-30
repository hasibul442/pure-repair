<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
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
        $product = Product::get();
        return view('backend.product.product',compact('product'));
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
        $slug=Str::slug($request->p_name);
        $product = new Product;
        $product->p_name = $request->p_name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->cat_id = $request->cat_id;
        $product->brand_id = $request->brand_id;
        $product->condition = $request->condition;
        $product->slug = $slug.'-'.date('ymdis').'-'.rand(0,999);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = 'product-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/backend/assets/images/product/',$image_name);
            $product->image = $image_name;
        }
        $product->save();
         return response()->json(['success'=>'Data Add successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.product.product-edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->p_name = $request->p_name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->cat_id = $request->cat_id;
        $product->brand_id = $request->brand_id;
        $product->condition = $request->condition;
        if($request->hasFile('image')){
            $destination = public_path().'/backend/assets/images/product/'.$product->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $image = $request->file('image');
            $image_name = 'product-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/backend/assets/images/product/',$image_name);
            $product->image = $image_name;
        }
        $product->update();
        return redirect()->route('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if(!is_null($product)){
            $image_path = public_path().'/backend/assets/images/product/'.$product->image;
            unlink($image_path);
            $product->delete();
            return response()->json(['success'=>'Data Delete successfully.']);
        }
    }
    public function productstatus($id,$status){
        $product = Product::find($id);
        $product->status = $status;
        $product->update();
        return response()->json(['success'=>'Status changed successfully.']);
    }




}
