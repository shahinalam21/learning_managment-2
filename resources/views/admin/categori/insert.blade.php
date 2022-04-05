@extends('admin.layout')

@section('content')
     <div class="container">
          <div class="row">
               <div class="col-md-2">
                    <a class="btn btn-success" href="{{url('/categori')}}">Show Categori</a>
               </div>
               <div class="col-md-10">
                    <h2 class="bg-dark text-light text-center py-2">Add Categori</h2>
                    <div class="card">
                         <div class="card-body">
                            <form method="POST" action="{{url('/categori/store')}}">
                                @csrf
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Categori title</label>
                                  <input type="text" class="form-control" name="title" placeholder="Categori name" value="{{old('title')}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection
  