@extends('layouts.app')

@section('title', 'Categorías')

@section('content')
    <h1>Lista de Categorías</h1>
    <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Crear Categoría</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->descripcion ?? 'Sin descripción' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection