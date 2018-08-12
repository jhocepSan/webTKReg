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
Route::get('/menu', function () {
    return view('menuPrincipal');
});

Route::get('/registrar',function(){
	return view('registroestudiante');
});

Route::get('/asistencia',function(){
	return view('controlasistencia');
});

Route::get('/historialalumno',function(){
	return view('historialalumno');
});

Route::get('/deudores',function(){
	return view('listadeudores');
});

Route::get('/eventos',function(){
	return view('listaseventos');
});