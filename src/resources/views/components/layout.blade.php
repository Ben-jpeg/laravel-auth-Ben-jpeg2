<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mO'vie{{ isset($title) ? " - $title" : '' }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <!-- Header -->
    <header class="bg-indigo-600">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
            <div class="w-full py-6 flex items-center justify-between border-b border-indigo-500 lg:border-none">
                <div class="flex items-center">
                    <a href="{{ route('index') }}">
                        <span class="sr-only">mO'vie</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                        </svg>
                    </a>
                    <div class="hidden ml-10 space-x-8 lg:block">
                        <a href="{{ route('scribe') }}" target="_blank" class="text-base font-medium text-white hover:text-indigo-50">Documentation API</a>
                    </div>
                </div>
                 <div class="ml-10 space-x-4">
                    @guest
                        <a
                            href="/login" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75"
                            >Connexion
                        </a>
                        <a
                            href="/register" class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50"
                            >Inscription
                        </a>
                    @endguest
                    @auth
                    {{-- Julie et Tristan GGWP :) --}}
                    <div class="flex flex-wrap space-x-4">
                        <a
                            href="/profile" class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50"
                            >Mon profil
                        </a>
                    @if(auth()->user()->is_admin)
                        <a
                            href="/admin" class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50"
                            >Admin
                        </a>
                    @endif
                        <form action="/logout" method="POST">
                        @csrf
                            <button
                                type="submit"
                                class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50"
                            >Déconnexion
                            </button>
                        </form>
                    </div>
                    @endauth
            </div>
            </div>
            <div class="py-4 flex flex-wrap justify-center space-x-6 lg:hidden">
                <a href="{{ route('scribe') }}" class="text-base font-medium text-white hover:text-indigo-50">Documentation API</a>
            </div>
        </nav>
    </header>
    @include('partials.messages')

    {{ isset($slot) ? $slot : null }}

    @yield('content')
</body>
</html>
