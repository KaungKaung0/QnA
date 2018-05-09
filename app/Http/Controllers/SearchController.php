<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class SearchController extends Controller
{
    //


    public function search(Request $request){
    		$search =$request->search;
    		$found	=0;
    		$question = Question::where('question' ,  'LIKE', '%' . $search . '%')->get();

    		if(($question->count()> 0)){
    			$found =1;
    			return view('result' , compact('question' , 'found'));	
    		}
    		else{
    			return view('result' , compact('found'));
    		}
    		
    }

    public function result(Request $request){

    }
}
