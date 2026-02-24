<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('welcome');

Route::get('/phone', 'App\Http\Controllers\PhoneController@index')->name('phone.index');

Route::get('/phone/create', 'App\Http\Controllers\PhoneController@create')->name('phone.create');

Route::post('/phone/save', 'App\Http\Controllers\PhoneController@save')->name('phone.save');

Route::delete('/phone/{id}/delete', 'App\Http\Controllers\PhoneController@delete')->name('phone.delete');

Route::get('/phone/{id}', 'App\Http\Controllers\PhoneController@show')->name('phone.show');
