@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a class="btn btn-success" href="{{ url('/course/create') }}">Add Course</a>
            </div>
            <div class="col-md-10">
                <h2 class="bg-dark text-light text-center py-2">Course table</h2>
                @if (Session::has('massage'))
                    <div class="alert alert-success">
                        {{ session('massage') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                    
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Course title</th>
                                    <th scope="col">created_at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <th scope="row"> <img class = "img-thumbnail" src="{{asset('images')}}/{{$course->image}}" alt="" width="60" height="50"></th>
                                        <td>{{$course->title}}</td>
                                        <td>{{$course->created_at}}</td>
                                        <td>
                                             <a class="btn btn-info" href="{{url('/course/edit/'.$course->id)}}">Edit</a>
                                             <a class="btn btn-info" href="{{url('/course/show/'.$course->id)}}">show</a>
                                             <a class="btn btn-danger" href="{{url('/course/destroy/'.$course->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $courses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
