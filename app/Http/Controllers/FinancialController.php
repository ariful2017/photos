<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinancialController extends Controller
{
    public function index(){

        $myFinancial = Auth::user()->financial;
        return view('user.financials',compact('myFinancial'));
    }

    public function cashOut(){
        $user =Auth::user();
        if ($user->financial->balance>10){
            $currentBalance = $user->financial->balance;
            $user->cashOut()->create([
                'financial_id'=> $user->financial->id,
                'amount'=> $currentBalance,
            ]);
            $user->financial()->update([
               'balance'=>(float) 0.00
            ]);
            return redirect()->back();
        }else{
            abort('403');
        }
    }
}
