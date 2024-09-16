<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo','BunCream')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/js/app.js')
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