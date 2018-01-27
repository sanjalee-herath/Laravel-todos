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

Auth::routes();

Route::get('/home', 'TasksController@index')->name('home');

Route::post('/tasks', 'TasksController@store');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/tasks/{task}/edit','TasksController@edit');

Route::get('/tasks/{id}/update','TasksController@update');

Route::get('tasks/{id}/delete', 'TasksController@destroy');