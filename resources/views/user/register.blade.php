@extends('layouts.userLayout')
@section('title','Register')
@section('content')
    <div class="container">
        <div class="row">
            @include('errors.errors')
            <div class="col-5 offset-3 border p-3 mt-5 mb-5">
                <h2 class="text-center text-dark">User Registration</h2>
                <form action="{{route('user.register')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Enter your user name" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter your full name" name="full_name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Confirmation Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                </form>

            </div>
        </div>
    </div>


@endsection



