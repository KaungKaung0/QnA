<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\User;
use Auth;
class AnswerController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $profile_pic = \Auth::user()->profile_pic;
        if($request->try == "question"){
            return view('texteditor' , ['try'=>"question" ,'pp'=>$profile_pic]);
        }
        $q_id = $request->q_id;
        return view('texteditor' , ['q_id' => $q_id , 'pp'=>$profile_pic ,'try'=>"answer"]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
       $validated_data = $request->validate([
        'answer'  => 'required|min:1',
    ]);

       $answer = Answer::create([
        'answer' => $validated_data['answer'],
        'q_id'     => $request->q_id,
        'user_id' => \Auth::user()->id,
        'up_vote' => 0,
        'down_vote' => 0,
         'created_Date' =>date('Y-m-d')
    ]);
       $user = Auth::user();
       $user->exp =+1;
       $user->save(); 
       $place = $request->place;
       switch ($place) {
         case "view":
            $q_id = $request->q_id;
            return redirect()->route("questions.index" ,['q_id' => $q_id]);
         break;  
         case "profile":
            return redirect('profile');
         break;
         default:
             return redirect()->route("main.index");
         break;
     } 
 }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
