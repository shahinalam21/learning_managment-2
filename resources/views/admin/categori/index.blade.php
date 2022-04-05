@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a class="btn btn-success" href="{{ url('/categori/create') }}">Add Categori</a>
            </div>
            <div class="col-md-10">
                <h2 class="bg-dark text-light text-center py-2">Categori table</h2>
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
                                    <th scope="col">Sl No</th>
                                    <th scope="col">Categori title</th>
                                    <th scope="col">Create Date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                 @php
                                     $i = 1;
                                 @endphp
                                @foreach ($categoris as $categori)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{$categori->title}}</td>
                                        <td>{{$categori->created_at}}</td>
                                        <td>{{$categori->updated_at}}</td>
                                        <td>
                                             <a class="btn btn-danger" href="{{url('/categori/destroy/'.$categori->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $categoris->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
