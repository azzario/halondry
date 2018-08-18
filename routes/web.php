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

//Route pages
Route::get('/', 'PagesController@index');

//Route cucian
Route::get('/cucian', 'CucianController@index');
Route::get('/cucian/create', 'CucianController@create');
Route::post('/cucian', 'CucianController@store');

//Route lokasi
Route::get('/loc', 'LokasiController@getLokasi');

//Route harga
Route::get('/harga', 'RefHargaController@getHarga');
