@extends('layouts.app')

@section('title', $movie[0]('title'))
    
@section('content')
    @dump($movie)
@endsection