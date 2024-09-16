@extends('layouts.app')
@section('titulo', 'Crear producto')
@section('cabecera', 'Crear producto')

@section('contenido')
    <div class="flex justify-center my-6">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                <form action="{{ route('productos.store') }}" method="POST">
                    @csrf
                    {{-- Nombre --}}
                    <div>
                        <label for="nombre" class="label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="input input-borderer" placeholder="Nombre del producto" required>
                    </div>
                    {{-- Descripción --}}
                    <div>
                        <label for="descripcion" class="label">Descripción</label>
                        <input name="descripcion" id="descripcion" class="textarea textarea-bordered" placeholder="Descripción del producto">
                    </div>
                    {{-- Precio --}}
                    <div>
                        <label for="precio" class="label">Precio</label>
                        <input type="number" name="precio" id="precio" class="input input-borderer" placeholder="Precio del producto" required>
                    </div>
                    {{-- Stock --}}
                    <div>
                        <label for="stock" class="label">Stock</label>
                        <input type="number" name="stock" id="stock" class="input input-borderer" placeholder="Stock del producto" required>
                    </div>
                    {{-- Botón guardar --}}
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Crear producto</button>
                        <a href="{{ route('productos.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection