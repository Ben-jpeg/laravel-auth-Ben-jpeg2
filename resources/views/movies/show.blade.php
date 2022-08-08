@extends('master')

@section('title', $movie->name)

@section('content')
    <h2>{{ $movie->name }}</h2>

    <a href="{{ route('movies.edit', $movie->id) }}">Editer {{ $movie->name }}</a>
@endsection
