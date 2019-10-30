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

Route::get('/', function () {
  return view('welcome');
});

Route::get('contacto', function () {
  return view('contacto');
})->name('contacto');

Route::get('blog/{id}', function ($id) {
  return view('blog', ['id' => $id]);
})->name('blog');

Route::get('nblog/{id}/{nombre?}', function ($id, $nombre='anonimo') {
  return view('nblog', ['id' => $id, 'nombre' => $nombre]);
})->where(array('nombre'=>'[a-zA-Z]+','id'=>'[0-9]+'))->name('nblog');

Route::get('/saludo', 'SaludoController@Saludo')->name('saludo');
Route::get('/saludoconnombre/{nombre}', 'SaludoController@SaludoNombre')->name('saludonombre');
