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

/********* Slider Routes ************/

Route::resource('/slider','SliderController');
Route::post('/delete_slider/{id}','SliderController@delete_slider');
Route::post('/update_slider/{id}','SliderController@update_slider');

/********** Event Routes ************/

Route::resource('/event','EventController');
Route::post('/delete_event/{id}','EventController@delete_event');
Route::post('/update_event/{id}','EventController@update_event');
Route::post('/add_pictures/{id}','EventController@add_pictures');
Route::post('/add_vedios/{id}','EventController@add_vedios');

