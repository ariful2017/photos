@extends('layouts.userLayout')
@section('title','My-Image')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                My Images:
                <hr>
                <section class="py-5">
                    <div class="container px-4 px-lg-5 mt-5">
                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                            @foreach($userImages as $image)
                                <div class="col mb-5">
                                    <x-card :imageName="$image->name" :imageDetails="$image->details" :image="$image->image " :status="$image->status"/>
                                </div>
                            @endforeach
                        </div>
                        {{$userImages->links()}}
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

