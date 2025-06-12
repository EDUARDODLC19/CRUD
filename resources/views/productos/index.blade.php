<h1>Listado de Productos</h1>
<a href="{{ route('productos.create') }}">Crear nuevo producto</a>
<ul>
    @foreach ($productos as $producto)
        <li>{{ $producto->nombre }} - ${{ $producto->precio }}</li>
    @endforeach
</ul>
