<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){

        $cities=['asswan','assut','minya'];

        $switch=0;

        return view('about',compact('cities','switch'));

    }
}
