<?php

use Illuminate\Support\Facades\Route;
use Illuminate\App\Http\Controllers\ProductoController;
use Illuminate\App\Http\Controllers\SucursalController;

Route::get('/', function () {
 return view('welcome'); 
});

Route::get('/prueba', function () {
    return view('prueba'); 
   });

Route::get('/index', function () {
    return view('index'); 
   });   

Route::get('/producto/create', [ProductoController::class, 'create'])->name('producto.create');

Route::post('/producto', [ProductoController::class, 'store'])->name('producto.store');

//Route::get('/','App\Http\controllers\ProductoController@index');

Route::resource('/producto', 'App\Http\Controllers\ProductoController');
Route::get('/Eliminarsucursal/{id}', 'App\Http\Controllers\SucursalController@delete');
Route::get('/sucursal/{id}', 'App\Http\Controllers\SucursalController@show');
Route::post('/updatesucursal','App\Http\Controllers\SucursalController@update');

