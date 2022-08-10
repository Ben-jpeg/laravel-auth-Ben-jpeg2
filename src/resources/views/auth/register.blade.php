@extends('components.layout')

@section('title', 'Créer votre compte')

@section('content')
<div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
            <h2>Créer votre compte</h2>
            <form action="/register" method="POST">
                @csrf
                <div class="w-full">
                    <label for="name" class="text-6xl font-extrabold text-gray-900">Pseudo</label>
                    <input type="text" id="name" name="name" class="w-full">
                </div>
                <div class="w-full">
                    <label for="email" class="text-6xl font-extrabold text-gray-900">E-mail</label>
                    <input type="email" id="email" name="email" class="w-full">
                </div>
                <div class="w-full">
                    <label for="password" class="text-6xl font-extrabold text-gray-900">Mot de passe</label>
                    <input type="password" id="password" name="password" class="w-full">
                </div>

                <div class="w-full">
                    <label for="password_confirm" class="text-6xl font-extrabold text-gray-900">Mot de passe</label>
                    <input type="password" id="password_confirm" name="password_confirm" class="w-full">
                </div>
                <button
                    class="mt-3 w-full flex items-center justify-center px-5 py-3 border rounded-md text-white bg-indigo-500 hover:bg-indigo-400 sm:flex-shrink-0"
                    type="submit"
                >
                Créer votre compte
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
