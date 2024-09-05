@extends('layouts.app')
@section('titulo', 'Inicio')
@section('contenido')
    <!-- Carousel -->
    <div class="carousel carousel-center bg-neutral rounded-box max-w-md space-x-4 p-4 mb-8">
        <div class="carousel-item">
            <img
              src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp"
              class="rounded-box" />
        </div>
        <div class="carousel-item">
            <img
              src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp"
              class="rounded-box" />
        </div>
        <div class="carousel-item">
            <img
              src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp"
              class="rounded-box" />
        </div>
        <div class="carousel-item">
            <img
              src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp"
              class="rounded-box" />
        </div>
        <div class="carousel-item">
            <img
              src="https://img.daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.webp"
              class="rounded-box" />
        </div>
        <div class="carousel-item">
            <img
              src="https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.webp"
              class="rounded-box" />
        </div>
        <div class="carousel-item">
            <img
              src="https://img.daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.webp"
              class="rounded-box" />
        </div>
    </div>

    <!-- Products -->
    <div class="flex flex-col items-center m-4 space-y-4">
        @foreach ($productos as $producto)
            <div class="card bg-base-100 w-60 shadow-xl">
                <figure>
                    <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $producto['nombre'] }}
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">${{ $producto['precio'] }}</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection