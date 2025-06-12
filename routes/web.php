<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return redirect()->route('productos.index');
});

Route::resource('productos', ProductoController::class)->only(['index', 'create']);
Route::resource('categorias', CategoriaController::class)->only(['index', 'create']);
Route::resource('proveedores', ProveedorController::class)->only(['index', 'create']);
Route::resource('clientes', ClienteController::class)->only(['index', 'create']);