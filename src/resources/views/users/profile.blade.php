@extends('components.layout')

@section('title', 'Bienvenue')

@section('content')

<div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2>Bienvenue {{ auth()->user()->name }}</h2>
    </div>
</div>
@endsection
