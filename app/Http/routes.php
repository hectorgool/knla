<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('home');
});

Route::resource('equipos','EquiposController');
Route::resource('semanas', 'SemanasController');
Route::resource('partidos', 'PartidosController');

Route::resource('user','UserController');

/*
Route::get('/', function() {
	return 'All cats';
});

Route::get('cats/{id}', function($id) {
	return sprintf('Cat #%s', $id);
});
*/