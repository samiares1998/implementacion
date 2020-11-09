<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'UserController@inicio')->name('ini');
Route::resource('user','UserController');
Route::get('eliminar/{id}', 'UserController@destroy');
Route::post('/actualizar/{id}', 'UserController@update')->name('actualizar');