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

Route::get('/home', 'MainController@index');
Route::get('/', 'MainController@index');

Route::resource('main' , 'MainController');
Route::resource('questions' , 'QuestionController');
Route::resource('answers' , 'AnswerController');
Route::resource('profile', 'ProfileController');
Route::resource('aboutus', 'AboutusContoller');

Route::get('logout', 'MainController@logout' );






