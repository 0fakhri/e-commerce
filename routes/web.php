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

Route::get('/home', function () {
    return "hello guys david disini";
});
Route::resource('/crud', 'mainController');
Route::resource('/', 'HomeController');
Route::resource('/masuk', 'AuthController');
Route::resource('/daftar', 'Auth\RegisterController');
