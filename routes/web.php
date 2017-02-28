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
Route::get('/team', function(){return view('team');});
Route::get('/login', function(){return view('login');});
Route::get('/details-idea', function(){return view('details-idea');});
Route::get('/browse-after', function(){return view('browse-after');});



Auth::routes();

Route::get('/home', 'HomeController@index');
