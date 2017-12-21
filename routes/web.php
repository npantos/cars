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

Route::get('/', 'CarsController@index');

Route::get('/about', 'CarsController@about');

Route::get('/car/{id}', 'CarsController@show')->name('car');;