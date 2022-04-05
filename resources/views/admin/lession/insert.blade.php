@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <a class="btn btn-info" href="{{ url('/lession') }}">Show lession</a>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h2 class="bg-dark text-light text-center py-2">Add Lession</h2>

                    <form method="POST" action="{{ url('/lession/store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" placeholder="title"
                                value="{{ old('title') }}">
                                
                            @error('title')
                                <div class="alert">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <select class="form-select form-control" aria-label="Default select example"
                                name="course_id">
                                <option selected>Select Course</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}"
                                        @if ($course->id == old('course_id')) selected @endif>
                                        {{ $course->title }}</option>
                                @endforeach
                            </select>
                            @error('title')
                                <div class="alert">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" class="form-control" placeholder="Description" id="floatingTextarea2"
                                style="height: 200px">{{ old('description') }}</textarea>

                            @error('title')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">video_url</label>
                            <input class="form-control" type="text" id="formFile" name="video_url">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection