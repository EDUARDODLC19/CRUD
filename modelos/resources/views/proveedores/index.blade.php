@extends('layouts.app')

@section('title', 'Proveedores')

@section('content')
    <h1>Lista de Proveedores</h1>
    <a href="{{ route('proveedores.create') }}" class="btn btn-primary mb-3">Crear Proveedor</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->id }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection