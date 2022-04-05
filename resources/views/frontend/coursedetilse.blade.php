@extends('frontend.layout')


@section('content')

    <div class="row">
        <h2 class="bg-primary text-center" style="padding: 20px">{{$courses->first()->title}}</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img-responsive mb-2" src="{{asset('images')}}/{{$courses->first()->image}}" alt="">
            </div>
            <div class="col-md-8">
                <h3 class=" ">{{$courses->first()->title}}</h3>
                <p class="pb-2">{{$courses->first()->description}}</p>
            </div>
        </div>
    </div>
@endsection