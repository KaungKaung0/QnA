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
    		$search =$request->search;
    		$found	=0;
    		$question = Question::where('question' ,  'LIKE', '%' . $search . '%')->get();
            $u = User::select('id' , 'name' , 'profile_pic')->get();

    		if(($question->count()> 0)){
    			$found =1;
    			return view('result' , compact('question' , 'found', 'u'));	
    		}
    		else{
    			return view('result' , compact('found'));
    		}
    		
    }

    public function result(Request $request){

    }
}
