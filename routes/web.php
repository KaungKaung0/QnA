<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/home', 'MainController@index') -> name('main');
Route::get('/', 'MainController@index') -> name('main');
Route::get('/mailconf' , 'MailsendController@index')->name('mailconf');
Route::post('/mailconf/confirm' , 'MailsendController@confirm')->name('mailconf.confirm');

Route::get('/confirmation' , function(){
	flash('Confirmation code is wrong. Please enter the correct code.');
	return view('confirmation');
});
Route::resource('main' , 'MainController');

Route::resource('questions' , 'QuestionController');
Route::resource('answers' , 'AnswerController');
Route::resource('registers' , 'RegisterController');


Route::get('/profile', 'ProfileController@index')-> name('profile');
Route::get('/aboutus', 'AboutusController@index') -> name('aboutus');
Route::get('logout', 'MainController@logout' );

Route::get('resign' , function(){
	auth()->logout();
	return redirect('register');
})->name('resign');

Route::get('/t_view' , function(){
	return view('texteditor');
})->name('t_view');


Route::post('/questrating' , 'RatingController@questrating')->name('qrate');
Route::post('/ansrating' , 'RatingController@ansrating')->name('ansrate');


Route::post('/ppupload' , 'ProfileController@pp')->name('ppupload');





