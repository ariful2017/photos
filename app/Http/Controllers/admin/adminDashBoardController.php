<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminDashBoardController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
}
