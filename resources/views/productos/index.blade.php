@extends('layouts.app')

@section('title', 'Productos')

@section('content')
    <h1>Lista de Productos</h1>
    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Crear Producto</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion ?? 'Sin descripción' }}</td>
                    <td>{{ number_format($producto->precio, 2) }}</td>
                    <td>{{ $producto->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection