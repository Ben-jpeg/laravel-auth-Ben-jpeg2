<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Welcome')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="container">
            @include('includes.errors')
            <ul>
                <li><a href="/movies">Liste des films</a></li>
                <li>
                    <a href="{{ route('movies.create') }}">Ajouter un film</a>
                </li>
            </ul>
            @yield('content')
        </div>
    </body>
</html>
