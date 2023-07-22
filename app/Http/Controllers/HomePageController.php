<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $sliderhead ="welcome";
        $slidercontent ="I love php";

        return view('welcome',compact(['sliderhead','slidercontent']));
    }
}
