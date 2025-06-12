<!DOCTYPE html>
<html>
<head>
    <title>Inventario</title>
</head>
<body>
    <nav>
        <a href="{{ route('productos.index') }}">Productos</a> |
        <a href="{{ route('categorias.index') }}">Categorías</a> |
        <a href="{{ route('proveedores.index') }}">Proveedores</a> |
        <a href="{{ route('clientes.index') }}">Clientes</a>
    </nav>

    <hr>
    @yield('content')
</body>
</html>php artisan migrate
