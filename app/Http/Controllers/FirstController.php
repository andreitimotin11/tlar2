<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FirstController extends Controller
{
    public function show(){
        echo view();
        dd();
       return view('welcome');
    }
}
