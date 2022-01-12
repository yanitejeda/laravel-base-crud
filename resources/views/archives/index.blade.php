@extends('layouts.default')
@section('title_page',"archivio fumetti")
    

@section('content')
<h1>archivio fumetti</h1>

<ul>
    @foreach ($Archives as $archive)
        <li>{{$archive->title}}</li>
    @endforeach

</ul>
    
@endsection