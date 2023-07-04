<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/api/tasks', 'TaskController@index');
Route::get('/api/tasks/{id}', 'TaskController@show');
Route::post('/api/tasks', 'TaskController@store');
Route::put('/api/tasks/{id}', 'TaskController@update');
Route::delete('/api/tasks/{id}', 'TaskController@destroy');
