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
    return view('welcome');
});

Route::get('/piscicultura', 'App\Http\Controllers\PisciculturaController@index')->name('piscicultura');

Route::get('/simulador_piscicultura', 'App\Http\Controllers\PisciculturaController@index_simulador')->name('simulador_piscicultura');

Route::get('/piscicultura_simulado', 'App\Http\Controllers\PisciculturaController@index_simulado')->name('piscicultura_simulado');

Route::name('pdf_piscicultura')->get('/pdf_piscicultura', 'App\Http\Controllers\PisciculturaController@generar_pdf');

/*
* Routes of pets
*/

Route::get('/nombreMascotas', 'App\Http\Controllers\mascotasController@can')->name('nombreMascotas');

Route::get('/form-edad', 'App\Http\Controllers\mascotasController@edad')->name('form-edad');

Route::get('/form-tamaño', 'App\Http\Controllers\mascotasController@tamaño')->name('form-tamaño');

Route::get('/selecciona-comida', 'App\Http\Controllers\mascotasController@comida')->name('selecciona-comida');

Route::get('/form-actividad', 'App\Http\Controllers\mascotasController@actividad')->name('form-actividad');

Route::get('/resultado-simulado', 'App\Http\Controllers\mascotasController@resultadoSimulado')->name('resultado-simulado');

// gatos

Route::get('/tamaño-gatos', 'App\Http\Controllers\mascotasController@tamañoGatos')->name('tamaño-gatos');

Route::get('/comida-gatos', 'App\Http\Controllers\mascotasController@comidaGatos')->name('comida-gatos');

Route::get('/actividad-gatos', 'App\Http\Controllers\mascotasController@actividadGatos')->name('actividad-gatos');

Route::get('/resultado-gatos', 'App\Http\Controllers\mascotasController@resultadoGatos')->name('resultado-gatos');
