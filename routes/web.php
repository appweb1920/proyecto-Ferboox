<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    $user = Auth::user();
    return view('inicio')->with('user',$user);
});

Route::get('/catalogo',"ProductosController@index");
Route::get('/agrega',"ProductosController@agregaProducto");
Route::post('/registroProducto',"ProductosController@store");
Route::get('/editarProducto/{id}','ProductosController@show');
Route::post('/editarProducto/guardaProducto','ProductosController@guardaCampos');
Route::get('/borrarProducto/{id}','ProductosController@destroy');
Route::get('/restaura/{id}','ProductosController@restaurar');
Route::get('/enviaCorreo','ProductosController@enviaCorreo');
Route::post('/agregarCategoria',"CategoriasController@store");
Route::get('/pdf','ArchivosController@create');
Route::post('/pdf/guarda',"ArchivosController@store");
Route::post('/pdf/almacenaProducto','CotizadorController@store');
Route::get('/quitaProducto/{id}&&{cotizacion_id}','CotizadorController@destroy');
Route::get('/pdf/descargaCotizacion/{id}','CotizadorController@descargaPDF');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
