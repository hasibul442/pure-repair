<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function homepage(){
        return view ('frontend.home');
    }
    public function service(){
        return view ('frontend.service');
    }
}
