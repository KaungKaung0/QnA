<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;
use App\Answer;

class ProfileController extends Controller
{
    public function index(){
        $user = \Auth::user()->name;
        $profile = \Auth::user()->profile_pic;

        $user_id = \Auth::user()->id;
        $a = Answer::get();
        $q = Question::where('user_id' , $user_id)->paginate('5');

        // checking profile pic

        if(file_exists('img/' . $profile )) {
            $picexit =1;
             return view('profile' ,compact( 'a' , 'q', 'user' , 'picexit' , 'profile'));

        } else {
            $picexit =0;
             return view('profile' ,compact( 'a' , 'q', 'user' , 'picexit'));
        }
        
       
    }

    public function pp(Request $request){
        $user = \Auth::user()->name;
        $photoName = $user.'.'.$request->pp->getClientOriginalExtension();

        $profile = \Auth::user();
        $profile->profile_pic = $photoName;
        $profile->save();
        $request->pp->move(public_path('img') , $photoName);

        return redirect('profile');	
    }
}

