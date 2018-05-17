<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index(){
    	$pp = \Auth::user()->profile_pic;
    	return view('aboutus' , ['pp'=>$pp]);
    }
}
