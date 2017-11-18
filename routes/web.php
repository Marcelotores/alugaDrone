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

Route::get('/drones', 'DroneController@getAll');
Route::get('/drones/user/{id}', 'DroneController@getAllByUser');
Route::get('/drone/{id}', 'DroneController@getById');

Route::get('/users', 'UserController@getAll');
Route::get('/users/drone/{id}', 'UserController@getAllByDrone');
Route::get('/user/{id}', 'UserController@getById');




//Route::get('/drones', 'DroneController@index');
