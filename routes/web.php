<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/status', 'UserController@userOnlineStatus');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
