@extends('master')

@section('title', 'Editer un film')


@section('content')

@include('includes.movies.form')

<form action="{{ $action }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Effacer le film</button>
</form>

@endsection
