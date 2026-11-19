@extends('layouts.master')

@section('content')

    @foreach ($movies as $movie)
        <x-movie-card :percentualVote="$movie['vote'] * 10">
            <x-slot:title>{{ $movie['original_title'] }}</x-slot:title>
            <x-slot:nationality>{{ $movie['nationality'] }}</x-slot:title>

            <x-slot:date>{{ $movie['date'] }}</x-slot:title>

            <x-slot:vote>{{ $movie['vote'] }}</x-slot:title>
        </x-movie-card>
    @endforeach

@endsection
