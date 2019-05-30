<?php

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

//Route::get('/', function () {
//   return view('welcome');
//});

Route::get('/', function () {
    return view('inicio');
});
Route::get('home','TrenController@vistaHome');
Route::get('instrucciones','TrenController@vistaInstrucciones');
Route::get('rojo','TrenController@lineaRoja');
Route::get('amarillo','TrenController@lineaAmarilla');
Route::get('verde','TrenController@lineaVerde');

Route::get('simular','TrenController@simularLR');

Route::get('simularA','TrenController@simularLA');






