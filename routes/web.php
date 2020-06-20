<?php

use Illuminate\Support\Facades\Route;

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

//Rutas para facultad


Route::resource('Facultad', 'FacultadController');

/* Route::get('/facultad/editar', function () {
    return view('Facultad.editar');
});
Route::get('/facultad', function () {
    return view('Facultad.index');
});
*/
//------------------------------------------------------------