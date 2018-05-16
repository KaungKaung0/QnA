<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use Auth;
use App\User;
class MainController extends Controller
{

    public function __construct()
    {
        session_start();
        $this->middleware('auth');
    }

    public function logout()
    {
        session_destroy();
        session_unset();
        auth()->logout();
        return view('auth.login');
        // $b = \Auth::id();
        // echo $b;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $confirmed = Auth::user()->confirmed;
        if($confirmed != 1)
        {
            flash('Your email is not confirmed. Confirm your email first.  The confirmation code is sent to your email');
            return redirect()->route('mailconf');
        }
        else
        {
            $profile_pic = Auth::user()->profile_pic;

            $a = Answer::orderBy('up_vote' ,'desc')->get();
            $u = User::select('id' , 'name' , 'profile_pic' , 'role')->get();


            $q = Question::paginate('5');
            return view('main' , compact( 'a','q' ,'u', 'profile_pic'));
        }
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
