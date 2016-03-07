<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get("/any","HomeController@get");
Route::get('/home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

Route::get('/','pagescontroller@index');
Route::get('/tagmoatna','pagescontroller@tagmoatna');
Route::get('/joinus','pagescontroller@joinus');
Route::get('/slider1','pagescontroller@slider1');

