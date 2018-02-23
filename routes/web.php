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

Route::get('/main' , 'MainController@index')-> name('main');
Route::resource('questions' , 'QuestionController') ;
Route::resource('answers' , 'AnswerController');
Route::get('/profile', 'ProfileController@index')-> name('profile');

Route::get('/aboutus', 'AboutusController@index') -> name('aboutus');
Route::get('logout', 'MainController@logout' );






