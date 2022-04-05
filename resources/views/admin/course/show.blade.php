@extends('admin.layout')

@section('content')
    <div class="container">
       <div class="row">
        <div class="col-md-2">
            <a class="btn btn-success" href="{{url('/course/create')}}">Add Course</a>
        </div>
        <div class="col-md-10">
            <div class="card">
                <img class = "rounded mx-auto d-block" src="{{asset('images')}}/{{$courses->image}}" alt="" width = "150" height="200">
                <div class="card-body">
                  <h2 class="card-title card text-center text-primary">{{$courses->title}}</h2>
                  <p class="card-text card text-center">{{$courses->description}}</p>
                  <a href="{{url('/course/edit/'.$courses->id)}}" class="btn btn-primary text-center">Edit</a>
                </div>
              </div>
        </div>
       </div>
    </div>
@endsection