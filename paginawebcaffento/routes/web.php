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
Route::get('/home', function () {
    return view('home');
});
Route::group(['prefix' => 'admin','as'=> 'admin' ], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/usuarios', 'UsersController@index');
   // Route::get('/menu', '')
    Route::post('/usuarios/edit', 'UsersController@editarUsuario');
    //Route::post('/usuarios', 'UsersController@store');
    Route::resource('usuarios', 'UsersController');
});
Route::group(['prefix' => 'usuario','as'=> 'usuario' ], function () {
    Route::get('/', 'PerfilController@index');
    Route::get('/reservaciones', 'PerfilController@reservaciones');
    Route::get('/servicio_domicilio', 'PerfilController@serviciodomicilio');
    Route::get('/buzon', 'PerfilController@buzon');
    
});
Route::get('/index','Controller@index');
//Route::post('/registro_login', 'Reg_LogController@store');
//Route::resource('registro_login', 'Usuarios_ClientesController');
Route::get('/registro_login', 'Reg_LogController@index');
//Route::resource('registro_login', 'Reg_LogController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
