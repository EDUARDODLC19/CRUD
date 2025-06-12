@extends('layouts.app')

@section('content')
<h1>Lista de Categorías</h1>
<a href="{{ route('categorias.create') }}">Crear nueva categoría</a>

<ul>
@foreach($categorias as $categoria)
    <li>{{ $categoria->nombre }}</li>
@endforeach
</ul>
@endsection
