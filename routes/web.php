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
Route::name('Inicio')->get('/', function () {return view('welcome');});
Route::name('Iniciosesion')->get('/Iniciosesion', function () {return view('Iniciosesion');});
// Route::name('Tabla_usuarios')->get('/Tabla_usuarios', function () {return view('Tabla_usuarios');});
// Route::name('Tabla_usuarios')->get('/Tabla_usuarios', function () {return view('Tabla_usuarios');});
// Route::name('Tabla_usuarios')->get('/Tabla_usuarios', function () {return view('Tabla_usuarios');});
// Route::name('Tabla_usuarios')->get('/Tabla_usuarios', function () {return view('Tabla_usuarios');});
// Route::name('Tabla_usuarios')->get('/Tabla_usuarios', function () {return view('Tabla_usuarios');});
