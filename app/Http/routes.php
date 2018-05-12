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

//Resources
Route::resource('procesos', 'ProcesoController');
Route::resource('empleados', 'EmpleadosController');
Route::resource('realizan', 'RealizanController');
Route::resource('reportes','ReportesController');
Route::resource('prestamos','prestamoController');

Route::resource('nomina','nominaController');

//Rutas complementarias
Route::get('admin', 'ProcesoController@index');
Route::get('empl', 'EmpleadosController@index');

Route::get('real', 'RealizanController@index');
// Route::get('showProcess', 'EmpleadosController@getProcess');
Route::get('report', 'ReportController@index');
// Route::get('asig', 'LoadingEmpleadosController@index');
// Route::get('showEmpleados', 'LoadingEmpleadosController@ShowEmpleados');
// Route::get('showProcesos', 'LoadingEmpleadosController@ShowProcesos');
//Ruta raíz
Route::get('/', function () {
    return view('index.index');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);