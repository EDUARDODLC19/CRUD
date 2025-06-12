<h1>Crear Producto</h1>
<form method="POST" action="{{ route('productos.store') }}">
    @csrf
    Nombre: <input type="text" name="nombre"><br>
    Descripción: <textarea name="descripcion"></textarea><br>
    Precio: <input type="number" step="0.01" name="precio"><br>
    Stock: <input type="number" name="stock"><br>
    <button type="submit">Guardar</button>
</form>
