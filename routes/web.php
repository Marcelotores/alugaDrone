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

//Drones

Route::get('/drones', 'DroneController@getAll');
Route::post('/drone', 'DroneController@store');
Route::delete('/drone/{id}', 'DroneController@destroy');
Route::get('/drone/{id}', 'DroneController@getById');
Route::get('/drones/user/{id}', 'DroneController@getAllByUser');


//Usuários
Route::get('/users', 'UserController@getAll');
Route::get('/users/drone/{id}', 'UserController@getAllByDrone');
Route::get('/user/{id}', 'UserController@getById');
Route::delete('/user/{id}', 'UserController@destroy');

//AlugaDrones
Route::post('/aluga_drone', 'AlugaDroneController@create');
Route::get('/aluga_drones', 'AlugaDroneController@index');
Route::delete('/aluga_drone/{drone_id}/{user_id}', 'AlugaDroneController@destroy');
Route::get('/aluga_drone/{drone_id}/{user_id}', 'AlugaDroneController@show');
Route::get('/aluga_drones/user/{user_id}', 'AlugaDroneController@getDronesAlugadosByUser');


//Login
Route::post('/login','UserController@doLogin');
Route::get('/logout','UserController@doLogout');
Route::get('/check_login','UserController@checkLogin');
Route::post('/user/newlogin','UserController@createLogin');





//Route::get('/drones', 'DroneController@index');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
