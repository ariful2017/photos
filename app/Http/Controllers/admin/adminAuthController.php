<?php

namespace App\Http\Controllers\admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminAuthController extends Controller
{
    public function showRegister(){
        return view('admin.adminregister');
    }

    public function Register(Request $request){
        $request->validate([
            'name' => 'required|max:55|alpha_dash|unique:admins,username',
            'password' => 'required|max:150|alpha_dash',
        ]);

        Admin::create([
            'username' => request('name'),
            'password' => bcrypt(request('password'))
        ]);

        return to_route('admin.dashboard.login.show')->with('okMassage', 'Register success! Login now');
    }

    public function showLogin(){
        return view('admin.login');
    }

    public function login(){

        $this->validate(\request(),[
            'name' => 'required|max:55|alpha_dash',
            'password' => 'required|max:150',
        ]);

        if(Auth::guard('admin')->attempt([
            'username' => request('name'),
            'password' => request('password'),
        ])){
            return to_route('admin.dashboard');

        }else{
            return redirect()->back()->with('errMsg', "Retry, brave soul! Login enied, but hope's not lost. Give it another shot and conquer the login realm!");
        };
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return to_route('admin.dashboard.login.show');
    }
}
