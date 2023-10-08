<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::get('login', 'App\Http\Controllers\LoginController@login_form');
Route::post('login', 'App\Http\Controllers\LoginController@do_login');
Route::get('register', 'App\Http\Controllers\LoginController@register_form');
Route::post('register', 'App\Http\Controllers\LoginController@do_register');
Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::get('home', 'App\Http\Controllers\HomeController@index');
Route::get('checkEmail/{email}', 'App\Http\Controllers\LoginController@check');
Route::get('check/{email}', 'App\Http\Controllers\LoginController@checkEmail');

Route::get('feed', 'App\Http\Controllers\HomeController@showFeed');

Route::get('profile', 'App\Http\Controllers\ProfileController@index');
Route::get('profiles', 'App\Http\Controllers\ProfileController@showProfile'); 

Route::get('create', 'App\Http\Controllers\createController@index');