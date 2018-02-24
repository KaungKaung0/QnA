<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;
use App\Answer;

class ProfileController extends Controller
{
    public function index(){

    	$user = \Auth::user()->address;
    	$url = 'https://sendkudo.org/api/v1/getbalance/' . $user; 
    	$result =json_decode(file_get_contents($url), true);
    	$point = $result['balance'];

    	$user_id = \Auth::user()->public_key;
    	$a = Answer::get();
        $q = Question::where('user_id' , $user_id)->paginate('5');
        
    	return view('profile' ,compact('point' , 'a' , 'q'));
    }
}
