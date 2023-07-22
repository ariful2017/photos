<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userAuthController extends Controller
{
    public function showLogin(){
        return view('user.login');
    }

    public function login(){
        $this->validate(\request(),[
            'username'=>'required',
            'password'=>'required',
        ]);
        if (Auth::attempt([
            'username'=>\request('username'),
            'password'=>\request('password'),
        ])){
            return to_route('user.upload.show');
        }else{
            return to_route('user.login.show')->with('errMsg',"Invalid Login Credentials");
        }
    }

    public function logout(){
        Auth::logout();
        return to_route('home');
    }

    public function showRegister(){
        return view('user.register');
    }

    public function register(){
        $this->validate(\request(),[
            'username'=>'required|min:4|unique:users,username|alpha-dash',
            'full_name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|alpha-dash|confirmed',
        ]);

        User::create([
            'username'=>\request('username'),
            'full_name'=>\request('full_name'),
            'email'=>\request('email'),
            'password'=>\request('password'),
        ])->financial()->create();

        return to_route('user.login.show')->with('okMsg','Register success. login now');
    }
}
