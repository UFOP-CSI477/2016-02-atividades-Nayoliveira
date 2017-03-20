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




Route::get('/eventos', 'EventosController@index');


Route::get('/', function () {
    return view('welcome');
});





Route::get('/atletas', 'AtletasController@index');
Route::get('/atletas/incluirRegistro', 'AtletasController@incluirRegistro');
Route::post('/atletas/incluirRegistro', 'AtletasController@salvaRegistro');

Route::get('/adm', 'AdmsController@index');
Route::get('/adm/listaAtletas', 'AdmsController@listaAtletas');
Route::get('/adm/listaRegistroEvento', 'AdmsController@indexEvento');
Route::post('/adm/listaRegistroEvento', 'AdmsController@listaRegistroEvento');
Route::get('/adm/listaRegistroAtleta', 'AdmsController@indexAtleta');
Route::post('/adm/listaRegistroAtleta', 'AdmsController@listaRegistroAtleta');


Auth::routes();
Route::get('/atletas/login', 'AtletasController@index');
Route::post('/atletas/login', 'Auth\LoginController@login');
Route::get('/atletas/logout', 'Auth\LoginController@logout');
