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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registe', function () {
    return view('registe');
});

Route::get('/forgot', function () {
    return view('forgot');
});

Route::get('/imgcode', 'UserController@imgcode');
Route::get('/qrcode', 'UserController@qrcode');
Route::post('/user/login', 'UserController@login');
Route::post('/user/registe', 'UserController@registe');
