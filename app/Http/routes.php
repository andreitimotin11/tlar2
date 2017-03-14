<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
    print 'sad';
})->name('home');
Route::get('/article/{page}', ['uses'=>'FirstController@show', 'as'=> 'article', 'middleware'=> 'mymiddle']);
Route::match(['get','post'],'/contact', ['uses'=>'Admin\ContactController@show', 'as'=> 'contact', 'middleware'=> 'mymiddle']);