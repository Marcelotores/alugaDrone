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
Route::get('/drones/user/{id}', 'DroneController@getAllByUser');
Route::get('/drone/{id}', 'DroneController@getById');


//Usuários
Route::get('/users', 'UserController@getAll');
Route::get('/users/drone/{id}', 'UserController@getAllByDrone');
Route::get('/user/{id}', 'UserController@getById');

//AlugaDrones
Route::get('/aluga_drone/{drone_id}/{user_id}', 'AlugaDroneController@alugaDrone');


//Login
Route::post('/login','UserController@doLogin'); 
Route::get('/logout','UserController@doLogout');
Route::post('/user/newlogin','UserController@createLogin');





//Route::get('/drones', 'DroneController@index');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
