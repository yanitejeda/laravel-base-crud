@extends('layouts.default')
@section('title_page',"nuovo fumetto")
@include('partials.navbar')

    

@section('content')
<h1>nuovo fumetto</h1>

{{-- <ul>
    @foreach ($Archives as $archive)
        <li>{{$archive->title}}</li>
    @endforeach

</ul> --}}


    <form action="{{route("Archives.store")}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">description</label>
          <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">foto</label>
            <input type="text" class="form-control" id="thumb"  name="thumb">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price">
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series">
          </div>
          <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" id="type" name="type">
          </div>
        
          <button type="submit" class="btn btn-primary">crea</button>
      </form>
    
@endsection