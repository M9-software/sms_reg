<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');

Route::get('/login', 'HomeController@login');
Route::get('/registe', 'HomeController@registe');
Route::get('/forgot', 'HomeController@forgot');

Route::get('/imgcode', 'UserController@imgcode');
Route::get('/qrcode', 'UserController@qrcode');
Route::post('/user/login', 'UserController@login');
Route::post('/user/registe', 'UserController@registe');

Route::get('/traffic', 'TrafficController@query');
