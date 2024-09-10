@extends('layouts.app')
@section('titulo', 'Inicio')
@section('contenido')
    <!-- Carousel -->
    <div id="carousel" class="carousel carousel-center rounded-box h-96 w-full">
        <div id="item1" class="carousel-item">
            <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp" alt="Pizza" class="h-full w-full object-cover" />
        </div>
        <div id="item2" class="carousel-item">
            <img src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp" alt="Pizza" class="h-full w-full object-cover" />
        </div>
        <div id="item3" class="carousel-item">
            <img src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp" alt="Pizza" class="h-full w-full object-cover" />
        </div>
        <div id="item4" class="carousel-item">
            <img src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp" alt="Pizza" class="h-full w-full object-cover" />
        </div>
        <div id="item5" class="carousel-item">
            <img src="https://img.daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.webp" alt="Pizza" class="h-full w-full object-cover" />
        </div>
        <div id="item6" class="carousel-item">
            <img src="https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.webp" alt="Pizza" class="h-full w-full object-cover" />
        </div>
        <div id="item7" class="carousel-item">
            <img src="https://img.daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.webp" alt="Pizza" class="h-full w-full object-cover" />
        </div>
    </div>
    <!-- Botones de navegación -->
    <div class="flex w-full justify-center gap-2 py-2">
        <button class="btn btn-xs" data-target="item1">1</button>
        <button class="btn btn-xs" data-target="item2">2</button>
        <button class="btn btn-xs" data-target="item3">3</button>
        <button class="btn btn-xs" data-target="item4">4</button>
        <button class="btn btn-xs" data-target="item5">5</button>
        <button class="btn btn-xs" data-target="item6">6</button>
        <button class="btn btn-xs" data-target="item7">7</button>
    </div>
    
    <!-- Products -->
    <div class="flex flex-col items-center m-4 space-y-4">
        @foreach ($productos as $producto)
            <div class="card bg-base-100 w-60 shadow-xl">
                <figure>
                    <img src="https://source.unsplash.com/random/800x600/?technology&{{ $producto->nombre }}" alt="{{ $producto->nombre }}" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $producto->nombre }}
                        <div class="badge badge-secondary">${{ $producto->precio }}</div>
                    </h2>
                    <p>{{ $producto->descripcion }}</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Stock:{{$producto->stock}}</div>
                        <div class="badge badge-outline">Productos</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Script JavaScript para el carrusel -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener todos los botones de navegación
            const buttons = document.querySelectorAll('[data-target]');
            
            // Añadir evento de clic a cada botón
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    // Obtener el ID del elemento objetivo desde el atributo data-target
                    const targetId = this.getAttribute('data-target');
                    
                    // Encontrar el elemento del carrusel con el ID objetivo
                    const targetElement = document.getElementById(targetId);
                    
                    // Desplazar el contenedor del carrusel al elemento objetivo
                    targetElement.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                });
            });
        });
    </script>
@endsection
