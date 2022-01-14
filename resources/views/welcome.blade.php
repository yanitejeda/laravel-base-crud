@extends('layouts.default')
@section('title_page',"home page")
@include('partials.navbar')

@section('content')
    
<div class="flex-center position-ref full-height">
          
                    
    <div class="content text-center">
     
            <a class="nav-link btn-light" href="{{route('Archives.index')}}">Archivio Fumetti</a>

        


        
    </div>
</div>
@endsection



   