<?php

namespace App\Http\Controllers;

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
}
