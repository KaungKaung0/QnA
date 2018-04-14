<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class MailsendController extends Controller
{
    //

	public function index()
	{	
		
		\Mail::send('email' , [] , function($message)
		{
			$email = Auth::user()->email;
			$name = Auth::user()->name;
			$message
			->to($email , $name)
			->subject('Confirm Your Email');
		});
		return view('confirmation');
	}

	public function confirm(Request $request)
	{
		$confirmation = Auth::user()->confirmation;

		$validate = $request->validate([
			'confirmation' => 'required|digits:8'
		]);
		$code =  $validate['confirmation'];

		if($code ==  $confirmation)
		{
			$user =  Auth::user();
			$user->confirmed = 1;
			$user->confirmation = null;
			$user->save();
			return redirect('/home');
		}
		else{
			flash('The confirmation code is not correct.')->error();
			return redirect('confirmation');
		}
	}
}
