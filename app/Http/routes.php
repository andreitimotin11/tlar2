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
Route::get('/page', function () {
    echo '<pre>';
//    print_r($_ENV);
    echo config('app.locale');
    echo Config::get('app.locale');
    echo '</pre>';
});
Route::get('/about', function () {
//       echo "Hello Laravel!";
//    return "Hello Laravel!";
    return view('about');
});
Route::any('/comments', function () {
//       echo "Hello Laravel!";
//    return "Hello Laravel!";
    return view('about');
});
