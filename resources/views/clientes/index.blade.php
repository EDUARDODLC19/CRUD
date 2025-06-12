@extends('layouts.app')

@section('content')
<h1>Lista de Clientes</h1>
<a href="{{ route('clientes.create') }}">Crear nuevo cliente</a>

<ul>
@foreach($clientes as $cliente)
    <li>{{ $cliente->nombre }} - {{ $cliente->email }}</li>
@endforeach
</ul>
@endsection
