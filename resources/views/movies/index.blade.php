@extends('master')

@section('title', 'Liste des films')

@section('content')
    <a href="/">Retour</a>
    <h2>Listes des films</h2>

    <ul>
        @foreach($movies as $movie)
            <li>
                <a href="{{ $movie->path() }}">
                    {{ $movie->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection

