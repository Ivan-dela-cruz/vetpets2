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


Route::get('administrador', function () {
    return view('admin.inicio.index');
});
Route::resource('categoria', 'Api\CategoryController');


Route::get('animal', 'Api\AnimalController@index')->name('animal');

Route::get('cita', 'Api\AppointmentController@index')->name('cita');

Route::get('cliente', 'Api\ClientController@index')->name('cliente');

Route::get('enfermedad', 'Api\DiseaseController@index')->name('enfermedad');

Route::resource('persona', 'Api\PersonController');

Route::get('reporte', 'Api\ReportController@index')->name('reporte');

Route::get('solicitud', 'Api\RequestHomeController@index')->name('solicitud');

Route::get('role', 'Api\RoleController@listarroles')->name('role');

Route::get('servicio', 'Api\ServiceController@index')->name('servicio');

Route::get('usuario', 'Api\UserController@index')->name('usuario');

Route::get('veterinario', 'Api\VetController@index')->name('veterinario');

Route::get('veterinaria', 'Api\VeterinaryController@index')->name('veterinaria');