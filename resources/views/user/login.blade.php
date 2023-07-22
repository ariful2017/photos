@extends('layouts.userLayout')

@section('title','Login')

@section('content')
    <div class="container">
        <div class="row">
            @include('errors.errors')
            <div class="col-5 offset-3 border p-3 mt-5 mb-5">
                <h2 class="text-center text-dark">Please login here</h2>
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Enter your user name" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your password">
                        <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>

            </div>
        </div>
    </div>


@endsection


