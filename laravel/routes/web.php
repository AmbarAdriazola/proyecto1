<?php

use Illuminate\Support\Facades\Route;
use Illuminate\App\Http\Controllers\ProductoController;
use Illuminate\App\Http\controllers\SucursalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
  return view('welcome');
});

Route::get('/','App\Http\controllers\ProductoController@index');

Route::resource('/producto', 'App\Http\Controllers\ProductoController');
Route::get('/Eliminarsucursal/{id}', 'App\Http\Controllers\SucursalController@delete');
Route::get('/sucursal/{id}', 'App\Http\Controllers\SucursalController@show');
Route::post('/updatesucursal','App\Http\Controllers\SucursalController@update');

