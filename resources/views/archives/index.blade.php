@extends('layouts.default')
@section('title_page', 'archivio fumetti')


@section('content')
    <h1>archivio fumetti</h1>

    <div class="row">
        @foreach ($Archives as $archive)


            <div class="card" style="width: 18rem;">
                <img src="{{ $archive->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $archive->title }}</h5>
                    <h6 class="card-title">{{ $archive->price }}</h6>
                    <h6 class="card-title">{{ $archive->series }}</h6>
                    <h6 class="card-title">{{ $archive->sale_date }}</h6>
                    <h6 class="card-title">{{ $archive->type }}</h6>
                   {{--  <p class="card-text">{{ $archive->description}}</p> --}}
                    <div class="d-flex justify-content-evenly">

                        <a>
                            <form action="{{route('Archives.destroy', $archive->id)}}" method="post">
                             @csrf
                             @method('delete')
                             <button  class="btn btn-danger" type="submit" value="Cancella">elimina</button>
                             </form>
                        </a>
                         <a href="{{route('Archives.edit', $archive->id)}}" class="btn btn-success">modifica</a>
                    </div>
                    </div>
            </div>



        @endforeach




        {{-- <a href="{{route}}">modifica</a> --}}

    </div>

@endsection
