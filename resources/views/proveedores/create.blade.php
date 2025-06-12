@extends('layouts.app')

@section('content')
<h1>Crear Proveedor</h1>

<form action="{{ route('proveedores.store') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre" required><br>
    <input type="text" name="direccion" placeholder="Dirección"><br>
    <input type="text" name="telefono" placeholder="Teléfono" required><br>
    <input type="email" name="email" placeholder="Correo electrónico" required><br>
    <button type="submit">Guardar</button>
</form>
@endsection
