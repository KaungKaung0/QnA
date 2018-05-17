<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;
class SearchController extends Controller
{
    //


    public function search(Request $request){
            $pp = \Auth::user()->profile_pic;
    		$search =$request->search;
    		$found	=0;
            if($search == "")
                return view('result' , compact('found','pp'));
            else{


    		$question = Question::where('question' ,  'LIKE', '%' . $search . '%')->get();
            $u = User::select('id' , 'name' , 'profile_pic')->get();

    		if(($question->count()> 0)){
    			$found =1;
    			return view('result' , compact('question' , 'found', 'u', 'pp'));	
    		}
    		else{

    			return view('result' , compact('found','pp'));
    		}
        }
    		
    }

    public function result(Request $request){

    }
}
