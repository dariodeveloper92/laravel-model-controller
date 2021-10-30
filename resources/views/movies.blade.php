@extends('layouts.app')

@section('title', 'Movies')

 {{-- main - movies --}}
 {{-- @section('content')
    <div class="list-movies"> 
        <h1> Sono il contenuto dei Movies</h1>    
        <li><a href="/movies"> Movies: </a></li>
        @foreach ($movies as $movie)
            <div class="copertina">
                <a href="{{  route('pagina-dettaglio', ['id' => $movie['id']]) }}">
                    <div class="text-movies">
                        <li>
                            <h2>{{ $movie['title'] }}</h2>
                            <h3>{{ $movie['original_title'] }}</h3>
                        </li>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection --}}

 {{-- main - movies --}}
 @section('content')
 <div class="container-main">
    <div class="list-movies"> 
        <h1 class="movies-title"> Sono il contenuto dei Movies</h1>    
        <li><a href="/movies"> Movies: </a></li>
        @foreach ($movies as $movie)
            <h2 class="title"> Title: {{ $movie['title'] }}</h2>    
            <h3 class="original_title"> Original Title: {{ $movie['original_title'] }}</h3>
            <br/>
        @endforeach
    </div>
 </div>
@endsection