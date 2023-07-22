<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class myImageController extends Controller
{
    public function index(){

        $userImages=Auth::user()->photos()->paginate(10);



        return view('user.myImages',compact('userImages'));
    }
}
