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

Route::get('/', 'WebController@index');
Route::get('/seguro-vida-termino', 'WebController@seguroVidatermino');
Route::get('/comparativo', 'WebController@comparativo');
Route::get('/contacto', 'WebController@contacto');
Route::get('/cita', 'WebController@cita');
Route::name('print')->get('/imprimir', 'WebController@imprimir');
