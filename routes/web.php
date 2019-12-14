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
Route::get('estudiante', 'EstudianteController@index')->name('estudiante.index');
Route::get('mostrarestudiantes', 'EstudianteController@mostrarestudiantes')->name('estudiante.mostrar');
Route::get('editarestudiante/{idEstudiante}', 'EstudianteController@editarestudiante')->name('estudiante.editar');
Route::post('actualizarestudiante/{idEstudiante}', 'EstudianteController@actualizarestudiante')->name('estudiante.actualizar');
Route::get('eliminarestudiante/{idEstudiante}', 'EstudianteController@eliminarestudiante')->name('estudiante.eliminar');
Route::post('estudiante/guardar', 'EstudianteController@guardar')->name('estudiante.guardar');
