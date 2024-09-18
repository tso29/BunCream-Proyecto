@extends('layouts.app')
@section('titulo', 'Acerca de nosotros')
@section('contenido')
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Acerca de Nosotros</h1>
        <p class="mb-4">
            En BunCream, nos dedicamos a brindar las mejores experiencias a nuestros clientes. 
            Somos una tienda especializada en productos frescos, artesanales y deliciosos, con un enfoque en la calidad 
            y el servicio al cliente. Nuestro objetivo es satisfacer los paladares más exigentes con nuestras 
            creaciones dulces y exclusivas.
        </p>
        
        <p class="mb-4">
            A lo largo de los años, hemos trabajado arduamente para convertirnos en un referente en la industria 
            y estamos orgullosos de ser un lugar donde las personas pueden disfrutar de momentos únicos. Desde 
            pasteles y helados personalizados hasta productos artesanales, ofrecemos algo especial para cada uno de 
            nuestros clientes.
        </p>

        <p class="mb-4">
            Nuestro equipo está formado por expertos apasionados por lo que hacen, siempre comprometidos en mejorar 
            y evolucionar. Creemos en la innovación constante y en ofrecer productos que no solo se disfruten, sino que 
            también creen recuerdos inolvidables.
        </p>

        <p class="mb-4">
            ¡Gracias por formar parte de nuestra historia! Si tienes alguna pregunta o deseas más información, 
            no dudes en ponerte en contacto con nosotros.
        </p>

        <!-- Botón para contactar -->
        <div class="text-center">
            <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Contáctanos
            </button>
        </div>
    </div>
@endsection
