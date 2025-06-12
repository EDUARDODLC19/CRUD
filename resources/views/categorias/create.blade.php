@extends('layouts.app')

@section('content')
<h1>Crear Categoría</h1>

<form action="{{ route('categorias.store') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre" required><br>
    <textarea name="descripcion" placeholder="Descripción"></textarea><br>
    <button type="submit">Guardar</button>
</form>
@endsection
