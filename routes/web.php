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
    return view('inicio');
});

Route::get('/catalogo',"ProductosController@index");
Route::get('/agrega',"ProductosController@agregaProducto");
Route::post('/registroProducto',"ProductosController@store");
Route::get('/editarProducto/{id}','ProductosController@show');
Route::post('/editarProducto/guardaProducto','ProductosController@guardaCampos');
Route::get('/borrarProducto/{id}','ProductosController@destroy');
Route::get('/enviaCorreo','ProductosController@enviaCorreo');
Route::post('/agregarCategoria',"CategoriasController@store");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
