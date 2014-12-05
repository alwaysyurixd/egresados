<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});
Route::get('encriptar', function()
{
    $var = Hash::make('victor');
    dd($var);
});
Route::post('ingreso', 'AuthController@login');
Route::controller('egresado','EgresadoController');
Route::controller('empresa','EmpresaController');
Route::get('logout', ['as'=>'logout','uses'=>'AuthController@logout']);