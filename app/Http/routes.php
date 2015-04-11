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
Route::get('/features', 'StaticController@features');
Route::get('/', 'BaseController@welcome');
Route::any('/error/{error_id}', 'BaseController@errors');


Route::get('/about', 'StaticController@about');


Route::match(['get', 'post'], '/auth/signup', 'AuthController@signup');
Route::match(['get', 'post'], '/auth/login', 'AuthController@login');
Route::controller('/user', 'UserController');