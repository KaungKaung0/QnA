<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;
use App\Answer;

class ProfileController extends Controller
{
    public function index(){
        $amazing = \Auth::user()->name;
    	

    	$user_id = \Auth::user()->id;
    	$a = Answer::get();
        $q = Question::where('user_id' , $user_id)->paginate('5');
        
    	return view('profile' ,compact( 'a' , 'q', 'amazing'));
    }
}
