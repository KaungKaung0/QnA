<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusContoller extends Controller
{
    public function index(){
    	return view('aboutus');
    }
}
