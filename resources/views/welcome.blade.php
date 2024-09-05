<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Bienvenida</title>
</head>
<body class="bg-pink-600">

    <header class="bg-pink-600 text-white p-4 flex justify-between items-center border-b-2 border-transparent">
        <h1 class="text-2xl font-bold flex items-center">
            <i class="fas fa-ice-cream mr-2"></i> BunCream
        </h1>
        
    </header>

    <div class="container mx-auto p-8">
        <!-- Contenedor del título -->
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-bold mb-4 text-white">¡Bienvenido a BunCream!</h2>
            <p class="text-white">Inicia sesión para ver nuestros productos y reservaciones.</p>
        </div>

        <!-- Formulario de inicio de sesión -->
        <div class="bg-white p-6 rounded-lg shadow-md max-w-sm mx-auto">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Usuario</label>
                <input type="text" id="username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" />
            </div>
            
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" id="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" />
            </div>

            <p class="text-sm text-center mb-4">
                <a href="#" class="text-indigo-600 hover:text-indigo-500">¿Olvidó la contraseña?</a>
            </p>
            
            <div class="text-center">
                <a href="{{ route('inicio') }}" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 block text-center">
                    Entrar
                </a>
            </div>
        </div>
    </div>

    <footer class="bg-pink-600 text-white text-center p-4 fixed bottom-0 w-full">
        <p class="m-0 text-sm">&copy; 2024 BunCream. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        document.getElementById('menu-button').addEventListener('click', () => {
            const navMenu = document.getElementById('nav-menu');
            navMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
