<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/




Route::get('/','IndexController@home');
Route::get('/profile', function(){return view('profile');});
Route::get('/login', function(){return view('login');});
Route::get('/browse', function(){return view('browse');});


