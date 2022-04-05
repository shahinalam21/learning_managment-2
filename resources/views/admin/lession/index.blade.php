@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a class="btn btn-success" href="{{ url('/lession/create') }}">Add Lession</a>
            </div>
            <div class="col-md-10">
                <h2 class="bg-dark text-light text-center py-2">Lession table</h2>
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
                                    <th scope="col">Sl</th>
                                    <th scope="col">Lession title</th>
                                    <th scope="col">created_at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($lessions as $lession)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $lession->title }}</td>
                                        <td>{{ $lession->created_at }}</td>
                                        <td>
                                            <a class="btn btn-info"
                                                href="{{ url('/lession/edit/' . $lession->id) }}">Edit</a>
                                            <a class="btn btn-info"
                                                href="{{ url('/lession/show/' . $lession->id) }}">show</a>
                                            <a class="btn btn-danger"
                                                href="{{ url('/lession/destroy/' . $lession->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $lessions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
