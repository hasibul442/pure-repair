<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function homepage(){
        return view ('frontend.home');
    }
    public function service(){
        return view ('frontend.service');
    }
    public function single_service_view($id,$slug)
    {
        $data = Service::find($id);
        return view('frontend.service-details',compact('data'));
    }
    public function productgroupview(Request $request, $id, $cat_name)
   {
    $category = Category::where('id', $id)->get();
    $products = Product::where(['cat_id'=> $id])->get();
    return view('frontend.catwiseproduct')->with(compact('category','products'));

   }
   public function single_product_view($id, $slug)
   {
    $data = Product::find($id);
    return view('frontend.singleproduct',compact('data'));
   }
   public function allproduct(){
    $product = Product::where('status','1')->get();
    return view('frontend.allproducts',compact('product'));
    }
   public function aboutus(){
    return view('frontend.aboutus');
    }
}
