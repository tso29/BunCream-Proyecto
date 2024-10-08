<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('titulo', 'BunCream')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-pink-600">
            {{-- NavBar --}}
            @include('layouts.navbar')
        </header>

        <main class="p-4 bg-pink-500">
            <div class="bg-green-100 my-4 text-center">
                <h1 class="text-lg font-semibold m-4 uppercase">@yield('cabecera')</h1>
            </div>
            @yield('contenido')
        </main>

        <footer class="footer bg-neutral text-neutral-content items-center p-4">
            @include('layouts.footer')
        </footer>
    </body>
</html>
