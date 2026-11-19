@extends('layouts.master')

@section('content')
    <p>This is the page for the movies!</p>

    @foreach ($movies as $movie)
        <x-movie-card>
            <x-slot:title>{{ $movie['original_title'] }}</x-slot:title>
            <x-slot:nationality>{{ $movie['nationality'] }}</x-slot:title>

            <x-slot:date>{{ $movie['date'] }}</x-slot:title>

            <x-slot:vote>{{ $movie['vote'] }}</x-slot:title>
        </x-movie-card>
    @endforeach
    
@endsection