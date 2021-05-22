<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::resource('articulos','App\Http\Controllers\ArticuloController');
Route::resource('clientes','App\Http\Controllers\ClienteController');
Route::resource('servicios','App\Http\Controllers\ServicioController');
Route::resource('lugarespoblados','App\Http\Controllers\LugarPobladoController');
Route::resource('direcciones','App\Http\Controllers\DireccionController');
Route::resource('instalaciones','App\Http\Controllers\InstalacionController');
Route::resource('recibos','App\Http\Controllers\ReciboController');
Route::resource('pagos','App\Http\Controllers\PagoController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
