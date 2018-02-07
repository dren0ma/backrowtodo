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

Route::get('/tasks', 'TaskController@show');

Route::post('/tasks', 'TaskController@add');

Route::get('/tasks/{id}/delete', 'TaskController@delete');

Route::get('/tasks/{id}/edit', 'TaskController@edit');

Route::post('/tasks/{id}/edit', 'TaskController@update');
    
