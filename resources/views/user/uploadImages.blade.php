@extends('layouts.userLayout')

@section('title','Upload-my-image')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-5 mb-5">
                @include('errors.errors')
                Upload Images:
                <hr>
                <form class="form-group"  enctype="multipart/form-data" METHOD="post" action="{{route('user.upload')}}">
                    @csrf
                    <div class="form-row">
                        <label class="form-label">Name:</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="form-row">
                        <label class="form-label">Details:</label>
                        <input class="form-control" type="text" name="details">
                    </div>
                    <div class="form-row">
                        <label class="form-label">Upload Image:</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                    <button class="btn btn-primary mt-3" name="submit" type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection


