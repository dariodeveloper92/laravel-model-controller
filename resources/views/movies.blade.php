@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <h1>Sono il contenuto dei Movies</h1>

    @dd($films[0]['title']);

    <div class="container">
        <div class="list-films">
            @foreach ($films as $index => $film)
                <p>
                    {{-- target="blank"  dopo il click apre la scheda in un'altra pagina --}}
                    <a target="blank" href="{{  route('pagina-dettaglio', ['id' => $film['id']]) }}"> {{  $film['title'] }}</a>
                    <p>{{  $film['original_title'] }}</p>
                </p>
                <br>
            @endforeach
        </div>
    </div>
@endsection
