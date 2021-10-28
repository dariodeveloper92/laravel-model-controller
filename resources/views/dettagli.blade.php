@extends('layouts.app')

@section('title', $movie('title'))
    
@section('content')
    @dump($movie)
@endsection