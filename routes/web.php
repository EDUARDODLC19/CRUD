<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::resource('productos', ProductoController::class)->only(['index', 'create', 'store']);
Route::resource('categorias', CategoriaController::class)->only(['index', 'create', 'store']);
Route::resource('proveedores', ProveedorController::class)->only(['index', 'create', 'store']);
Route::resource('clientes', ClienteController::class)->only(['index', 'create', 'store']);