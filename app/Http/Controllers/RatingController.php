<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
class RatingController extends Controller
{
    //
    public function questrating(Request $request){
        
    	$question = Question::where('q_id' ,$request->q_id)->first();
 		$question->count += 1;
    	switch ($request->rating) {
    		case '5':
    			$question->total +=5;
    			break;
    		case '4':
    			$question->total +=4;
    			break;
    		case '3':
    			$question->total +=3;
    			break;
    		case '2':
    			$question->total +=2;
    			break;
    		case '1':
    			$question->total +=1;
    			break;
    	}
    	$count = $question->count;
    	$total = $question->total;
    	$avg   = round( $total/$count, 1);
    	$question->avg = $avg;
    	$question->save();
    	return redirect()->route('questions.index' , ['q_id' => $request->q_id]);
    }

    public function ansrating(Request $request){
        
        $answer = Answer::where('id' , $request->id)->first();
        if($request->up_vote == 1){
            $answer->up_vote +=1;
            $answer->save();
            
        }
        else{
            $answer->down_vote = 1;
            $answer->save();
        
        }
    }
}
