@extends('layouts.app')

@section('content')
<h1>Lista de Proveedores</h1>
<a href="{{ route('proveedores.create') }}">Crear nuevo proveedor</a>

<ul>
@foreach($proveedores as $proveedor)
    <li>{{ $proveedor->nombre }} - {{ $proveedor->telefono }}</li>
@endforeach
</ul>
@endsection
