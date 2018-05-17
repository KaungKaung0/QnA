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

    public function index(Request $request)
    {
        $pp= \Auth::user()->profile_pic;
        $a = Answer::orderBy('up_vote','desc')->get();
        $q = Question::where('q_id' , $request->q_id)->paginate('1');
        $u = User::select('id' , 'name' , 'profile_pic' , 'role')->get();


        return view('question' , compact('a' , 'q' , 'u' , 'pp'));
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
        $q_id = \Hash::make(str_random(5));

       $validated_data = $request->validate([
        'question'  => 'required|min:1',
    ]);

       $question = Question::create([
        'question' => $validated_data['question'],
        'q_id'     => $q_id,
        'user_id'  => \Auth::user()->id,
        'viewer_count' =>0,
        'count'   =>0,
        'total'   => 0,
        'avg'     =>0

    ]);
       $place = $request->place;
       switch ($place) {
           case "view":
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


