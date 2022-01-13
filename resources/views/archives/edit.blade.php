@extends('layouts.default')
@section('title_page',"modifica fumetto")
    

@section('content')
<h1>aggiornamento dati fumetto: {{$Archives->title}}</h1>




    <form action="{{route('Archives.update', /* ['id'=> $Archives->id] */ $Archives->id)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control" id="title" value="{{$Archives->title}}" name="title">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">description</label>
          <input type="text" class="form-control" id="description" value="{{$Archives->description}}" name="description">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">foto</label>
            <input type="text" class="form-control" id="thumb" value="{{$Archives->thumb}}"  name="thumb">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" value="{{$Archives->price}}" name="price">
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series" value="{{$Archives->series}}" name="series">
          </div>
          <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="text" class="form-control" id="sale_date" value="{{$Archives->sale_date}}" name="sale_date">
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" id="type" value="{{$Archives->type}}" name="type">
          </div>
        
          <button type="submit" class="btn btn-primary">Salva</button>
      </form>
    
@endsection