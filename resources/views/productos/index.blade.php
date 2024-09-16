@extends('layouts.app')
@section('titulo', 'Inicio')
@section('contenido')
    <!-- Products -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 m-4">
        @foreach ($productos as $producto)
            <div class="card bg-base-100 w-60 shadow-xl">
                <figure>
                    <img src="https://source.unsplash.com/random/800x600/?beverages,desserts&{{ $producto->nombre }}" alt="{{ $producto->nombre }}" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $producto->nombre }}
                        <div class="badge badge-secondary">${{ $producto->precio }}</div>
                    </h2>
                    <p>{{ Str::limit($producto->descripcion,50) }}</p>
                    <div class="card-actions justify-end">
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-xs btn-primary">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-error">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection