@extends('layouts.userLayout')
@section('title','My-Financials')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                My Financials:
                <hr>
                <div class="col-12 mt-5 mb-5 text-center">
                    <h3>My Balance: {{$myFinancial->balance}} </h3>
                    <a href="{{route('user.myFinancial.cashOut')}}" class="btn btn-success {{$myFinancial->balance>10?'':'disabled'}}">Cash Out</a>
                </div>
            </div>
        </div>
    </div>
@endsection
