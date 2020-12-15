<?php

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
Route::resource('Producto', 'App\Http\Controllers\Controller2');
Route::resource('Producto', 'App\Http\Controllers\CarritoController');
Route::resource('Producto','App\Http\Controllers\AgcarritoController');





Route::get('/', function () {
    return view('dashboard2');
});

Route::get('/dashboard', function () {
    return view('dashboard2');
})->name('dashboard');

Route::get('/cerrar-sesion', function () {
    Auth::logout();
    return view('dashboard2');
})->name('cerrar-sesion');

Route::get('/Busqueda', function () {
return view('Busqueda');
})->name('Busqueda');

Route::get('/Carrito', function () {
    return view('Carrito');
    })->name('Carrito');

Route::get('/categoria/{idCategoria}', function (Request $request, $idCategoria) {
    $categoria = Categoria::with('productos')->find($idCategoria);
    $categorias = Categoria::all();
    return view('categoria', [
        'categoriaBase' => $categoria,
        'categorias' => $categorias
    ]);
})->name('categoria');

Route::get('Busqueda','App\Http\Controllers\Controller2@index');
Route::get('Carrito','App\Http\Controllers\CarritoController@index');
Route::get('Carrito','App\Http\Controllers\AgcarritoController@index');


