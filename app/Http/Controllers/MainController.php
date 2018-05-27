<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use Auth;
use App\User;
use App\ActivityLog;
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
            $this->expcalc();

            $pp = Auth::user()->profile_pic;

            $a = Answer::orderBy('up_vote' ,'desc')->get();
            $u = User::select('id' , 'name' , 'profile_pic' , 'role')->get();
            $q = Question::paginate('5');

            $log_u = Auth::user()->id;
            $log = ActivityLog::where('user_id' , $log_u)->get();
            if(!$log->count()){
                $logs = ActivityLog::first();

            }
            else{ 
                $logs = array();
                $c =0;
                foreach ($log as $key => $value) {
                    $logs[] = $value["ans_id"];
                }
            }
            
            return view('main' , compact( 'a','q' ,'u', 'pp' , 'logs'));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function expcalc(){
        $user = Auth::user();
        $exp = Auth::user()->exp;
        if($exp<=10){
            $user->role = "Noobie";
        }
        elseif ($exp>10&&$exp<=25) {
            $user->role = "Rookie";
        }
        elseif ($exp>25&&$exp<50) {
            $user->role = "Pro";
        }
        elseif ($exp>50&&$exp<=100) {
            $user->role = "Hyper";
        }
        elseif ($exp>100&&$exp<=200) {
            $user->role = "Lord";
        }
        elseif ($exp>200&&$exp<=500) {
            $user->role = "Legend";
        }
        elseif ($exp>500) {
            $user->role = "God";
        }
        $user->save();
    }
}
