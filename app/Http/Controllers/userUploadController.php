<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userUploadController extends Controller
{
    public function index(){
        return view('user.uploadImages');
    }

    public function upload(Request $request){
        $this->validate(\request(),[
            'name'=>'required|unique:photos,name',
            'details'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $imageName = uniqid().sha1(rand(100,900)).'.'.\request()->file('image')->extension();

        \request()->file('image')->move('uploads/',$imageName);

        Photo::create([
            'user_id'=>Auth::id(),
            'name'=> \request('name'),
            'details'=> \request('details'),
            'image'=>$imageName

        ]);

        return redirect()->back()->with('okMsg','Photo added successfully');

    }
}
