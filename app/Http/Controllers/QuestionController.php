<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QuestionController extends Controller
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
        $q= Question::where('Q_id' , \Auth::user()->public_key )->paginate('5');
        
<<<<<<< HEAD
        // $blocks = [
        //     'name'  => \Auth::user()->name,
        //     'private_key' => \Auth::user()->private_key,
        //     'public_key'  => \Auth::user()->public_key,
        //     'question' => question::where('Q_id' , '1')->first()->question       
        // ];
        // $blocks = (object) $block;

        // return view('question')->with('blocks' , $blocks);
=======
        $blocks = [
            'name'  => \Auth::user()->name,
            'private_key' => \Auth::user()->private_key,
            'public_key'  => \Auth::user()->public_key,
            'question' => question::where('Q_id' , \Auth::user()->public_key )->first()->question       
        ];
        // $blocks = (object) $block;

        return view('question')->with('blocks' , [$blocks , $q]);
>>>>>>> d61cdc8a4d09ff4147168ea8dd54f864251e3f19
        //
        return view ('question');
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

        $report = Question::create([
            'question' => $validated_data['question'],
            'q_id'     => \Auth::user()->first()->public_key,
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
