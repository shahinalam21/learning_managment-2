@extends('admin.layout')

@section('content')
    <div class="container">
       <div class="row">
        <div class="col-md-2">
            <a class="btn btn-success" href="{{url('/lession/create')}}">Add Lession</a>
        </div>
        <div class="col-md-10">
            <div class="card">
                <iframe width="900" height="400" src="{{$lessions->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                  <h2 class="card-title card text-center text-primary">{{$lessions->title}}</h2>
                  <a href="{{url('/course/edit/'.$lessions->id)}}" class="btn btn-primary text-center">Edit</a>
                </div>
              </div>
        </div>
       </div>
    </div>
@endsection