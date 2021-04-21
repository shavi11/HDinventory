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
Route::get('/', 'UsuariosController@index')->name('login');
Route::get('/', 'DiskController@inicio')->name('home');

Route::post('/', 'UsuariosController@ingresar')->name('ingresar');

Route::get('registro', 'DiskController@registro');
Route::post('/', 'DiskController@crear')->name('disco.crear');


Route::get('resultado', 'DiskController@resultado')->name('resultado');
Route::post('resultado', 'DiskController@compatible')->name('disco.compatible');



Route::get('addCompatible', 'DiskController@addCompatible')->name('addCompatible'); 
Route::post('addCompatible', 'DiskController@add');



Route::get('/', 'DiskController@terminaRegistro');
Route::get('showDisk', 'DiskController@terminaRegistro2');

Route::get('showDisk', 'DiskController@showDisk')->name('showDisk');
Route::get('editar/{id}','DiskController@editar')->name('editar');
Route::put('/editar/{id}','DiskController@update')->name('update');
Route::post('editCompatible','DiskController@add2')->name('editCompatible');;

Route::post('showDisk', 'DiskController@filtrado')->name('disco.filtrado');
Route::delete('showDisk/eliminar/{id}', 'DiskController@eliminar');
Route::delete('eliminarCompatible/{id}', 'DiskController@eliminarCompatible');
Route::get('showDisk/print', 'DiskController@imprimir');
