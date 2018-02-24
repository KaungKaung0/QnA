<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

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
    public function index()
    {
        //
       
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
        $user = \Auth::user()->address;

       $api_url = 'https://sendkudo.org/api/v1/sendkudo/1G93TfGJf8jAh5ZoaSiPFMbogCigZitZn5WtUi/' . $user . '/1/' . 'V89pZNLSZDFXDUqTZfb4KhjhQD1zj8TF3Lq7mNcHrQtGXcKVW762Z9rt';
        $result =json_decode(file_get_contents($api_url), true);

         $validated_data = $request->validate([
            'answer'  => 'required|min:1',
        ]);

        $answer = Answer::create([
            'answer' => $validated_data['answer'],
            'q_id'     => $request->q_id,
            'user_id' => \Auth::user()->first()->public_key,
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
