@extends('layouts.default')
@section('title_page',"dettagli fumetti")
@include('partials.navbar')

    

@section('content'){{-- 
<h1>{{$Archives->title}}</h1> --}}
archive

<div class="card" style="width: 18rem;">
    <img src="{{ $Archives->thumb }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $Archives->title }}</h5>
        <h6 class="card-title">{{ $Archives->price }}</h6>
        <h6 class="card-title">{{ $Archives->series }}</h6>
        <h6 class="card-title">{{ $Archives->sale_date }}</h6>
        <h6 class="card-title">{{ $Archives->type }}</h6>
       {{--  <p class="card-text">{{ $archive->description}}</p> --}}
        <div class="d-flex justify-content-evenly">

            <a>
                <form action="{{route('Archives.destroy', $Archives->id)}}" method="post">
                 @csrf
                 @method('delete')
                 <button  class="btn btn-danger" type="submit" value="Cancella">elimina</button>
                 </form>
            </a>
             <a href="{{route('Archives.edit', $Archives->id)}}" class="btn btn-success">modifica</a>
        </div>
        </div>
</div>




{{-- <ul>
    @foreach ($Archives as $archive)
        <li>{{$archive->title}}</li>
    @endforeach

</ul> --}}
    
@endsection