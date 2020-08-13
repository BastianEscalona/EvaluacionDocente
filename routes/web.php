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
    return view('auth.login');
});

Route::get('/Bienvenido', function(){
    return view("inicio");
});
//Rutas para facultad


Route::resource('Facultad', 'FacultadController');
Route::resource('Departamento', 'DepartamentoController');
Route::resource('Academico', 'AcademicoController');
Route::resource('Evaluacion', 'EvaluacionController');
Route::resource('Comisions', 'ComisionsController');
Route::resource('AsignarComision','AcademicothascomisionController');

Route::get('Evaluacion/create/{id_Academico}', [
    'as' => 'Evaluacion',
    'uses' => 'EvaluacionController@create',
]);
Route::get('Evaluacion/download/{id_Academico}', [
    'as' => 'Evaluacion',
    'uses' => 'EvaluacionController@download',
]);
/* Route::get('/facultad/editar', function () {
    return view('Facultad.editar');
});
Route::get('/facultad', function () {
    return view('Facultad.index');
});
*/
//------------------------------------------------------------
Auth::routes(['reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

//

