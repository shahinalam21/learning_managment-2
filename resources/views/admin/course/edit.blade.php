@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a class="btn btn-info" href="{{url('/course')}}">Show course</a>
            </div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h2 class="bg-dark text-light text-center py-2">Edit Course</h2>

                        <form method="POST" action="{{ url('/course/update/'.$courses->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input name="title" type="text" class="form-control" placeholder="title"
                                    value="{{ old('title') .$courses->title}}">
                                    
                                @error('title')
                                    <div class="alert">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <select class="form-select form-control" aria-label="Default select example"
                                    name="categori_id">
                                    <option selected>Select categori</option>
                                    @foreach ($categoris as $categori)
                                        <option value="{{ $categori->id }}"
                                            @if ($categori->id == old('categori_id',$courses->categori_id)) selected @endif>
                                            {{ $categori->title }}</option>
                                    @endforeach
                                </select>
                                @error('title')
                                    <div class="alert">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Description" id="floatingTextarea2"
                                    style="height: 200px">{{ old('description',$courses->description) }}</textarea>

                                @error('title')
                                    <div class="alert">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
