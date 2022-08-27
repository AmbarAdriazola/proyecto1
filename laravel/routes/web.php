<?php

use Illuminate\Support\Facades\Route;
use Illuminate\App\Http\Controllers\ProductoController;
use Illuminate\App\Http\Controllers\BodegaController;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/index', function () {
    return view('index'); 
});   

//Routas productos

Route::post('/producto', [ProductoController::class, 'store'])->name('producto.store');

Route::get('/producto/create', [ProductoController::class, 'create'])->name('producto.create');

Route::get('/producto/index', [ProductoController::class, 'index'])->name('producto.index');

Route::get('/producto/{id}/editar', [ProductoController::class, 'edit'])->name('producto.edit');

Route::put('/producto/{id}/actualizar', [ProductoController::class, 'update'])->name('producto.update');

Route::delete('/producto/{id}/eliminar', [ProductoController::class, 'destroy'])->name('producto.destroy');

//Rutas Bodega

Route::get('/bodega/create', [BodegaController::class, 'create'])->name('bodega.create');

Route::post('/bodega', [BodegaController::class, 'store'])->name('bodega.store');

Route::get('/bodega/index', [BodegaController::class, 'index'])->name('bodega.index');

Route::get('/bodega/{id}/editar', [BodegaController::class, 'edit'])->name('bodega.edit');

Route::put('/bodega/{id}/actualizar', [BodegaController::class, 'update'])->name('bodega.update');

Route::delete('/bodega/{id}/eliminar', [BodegaController::class, 'destroy'])->name('bodega.destroy');


Route::resource('/producto', 'App\Http\Controllers\ProductoController');
Route::resource('/bodega', 'App\Http\Controllers\BodegaController');





