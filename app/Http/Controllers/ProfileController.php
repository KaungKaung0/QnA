<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Question;
use App\Answer;

class ProfileController extends Controller
{
    public function index(){

        $user = \Auth::user()->name;
        $profile_pic = \Auth::user()->profile_pic;
        $role = \Auth::user()->role;

        $user_id = \Auth::user()->id;
        $a = Answer::get();
        $q = Question::where('user_id' , $user_id)->paginate('5');
        $u = User::select('id' , 'name' , 'profile_pic', 'role')->get();

        return view('profile' ,compact( 'a' , 'q' , 'u' , 'user'  , 'profile_pic' , 'role'));
    }

    public function pp(Request $request){
        $user = \Auth::user()->id;
        $photoName = $user.'.'.$request->pp->getClientOriginalExtension();

        $profile = \Auth::user();
        $profile->profile_pic = $photoName;
        $profile->save();
        $request->pp->move(public_path('img') , $photoName);

        return redirect('profile');	
    }
    public function ppdelete(){
        $id = \Auth::user()->id;
        $data = User::where('id' , $id)->first();
        $profile_pic = $data->profile_pic;
        unlink('img/' . $profile_pic);
        $data->profile_pic = null;
        $data->save();
        

        return redirect('profile');
    }
}

