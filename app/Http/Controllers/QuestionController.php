<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Question;
use App\Answer;
use App\User;


class QuestionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function index()
    {
        $user = \Auth::user()->public_key;
        
=======
    public function index(Request $request)
    {   

>>>>>>> 6acd6e8aa4e5fad099e00f207e41952762499b7a
        $a = Answer::get();
        $q = Question::where('q_id' , $request->q_id)->paginate('1');

        return view('question' , compact('a' , 'q'));
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
            'question'  => 'required|min:1',
        ]);

        $question = Question::create([
            'question' => $validated_data['question'],
            'q_id'     => \Hash::make(str_random(5)),
            'user_id'  => \Auth::user()->public_key,
            
        ]);

        return redirect()->route("main.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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


