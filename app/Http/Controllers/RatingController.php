<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;
use App\ActivityLog;
class RatingController extends Controller
{
    //
  public function questrating(Request $request){

   $question = Question::where('q_id' ,$request->q_id)->first();
   $user = User::where('id' , $question->user_id)->first();
   $question->count += 1;
   switch ($request->rating) {
    case '5':
    $question->total +=5;
    $user->exp +=5;
    break;
    case '4':
    $question->total +=4;
    $user->exp +=2;
    break;
    case '3':
    $question->total +=3;
    $user->exp +=1;
    break;
    case '2':
    $question->total +=2;
    break;
    case '1':
    $question->total +=1;
    $user->exp -=1;
    break;
  }
  $count = $question->count;
  $total = $question->total;
  $avg   = round( $total/$count, 1);
  $question->avg = $avg;
  $question->save();

  //User exp up
  

  $user->save(); 
  
  return redirect()->route('questions.index' , ['q_id' => $request->q_id]);
}

public function ansrating(Request $request){

  $answer = Answer::where('id' , $request->id)->first();
  $user = User::where('id' , $answer->user_id)->first();
  if($request->up_vote == 1){
    $answer->up_vote +=1;
    $answer->save();
    $user->exp +=1;
    $user->save();
    $log = ActivityLog::create([
      'user_id' => \Auth::user()->id,
      'ans_id'  => $request->id , 
      'vote'    => "up_vote"
    ]);
  }
  else{
    $answer->down_vote += 1;
    if($answer->up_vote > 0){
      $answer->up_vote  -=1;
    }
    $answer->save();
    if($answer->down_vote == 10){
      $answer->delete();
      $user->exp -=10;   
    }
    $log = ActivityLog::create([
      'user_id' => \Auth::user()->id,
      'ans_id'  => $request->id, 
      'vote'    => "down_vote"
    ]);
  }
}
}
