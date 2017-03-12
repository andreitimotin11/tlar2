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
});
Route::get('page/{id}', function (){
    return view('welcome');
})->where('id','[0-9]+');
Route::group(['prefix' => 'admin'], function (){
    Route::get('page/create/{id}', function (){
        return view('welcome');
    });
});
