@extends('layouts.app')
@section('titulo', 'Servicios')
@section('contenido')
    <div class="container mx-auto p-8">
        <!-- Contenedor del título -->
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-bold mb-4 text-white">¡Nuestros Servicios!</h2>
            <p class="text-white">Descubre los servicios que ofrecemos para mejorar tu experiencia.</p>
        </div>

        <!-- Servicios -->
        <div class="bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto text-center">
            <!-- Servicio 1: Hacer Reservaciones -->
            <div class="mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Hacer Reservaciones</h3>
                <p class="text-gray-600 mb-4">Realiza una reservación en nuestra tienda para disfrutar de los mejores productos y una atención personalizada.</p>
                <button class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 block text-center">
                    Reservar
                </button>
            </div>

            <!-- Servicio 2: Pedir Productos -->
            <div class="mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Hacer Pedidos</h3>
                <p class="text-gray-600 mb-4">Explora nuestros productos y realiza tu pedido para disfrutar en casa.</p>
                <button class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 block text-center">
                    Pedir Ahora
                </button>
            </div>
        </div>
    </div>
@endsection
