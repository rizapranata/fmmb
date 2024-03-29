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

Route::get('/register','RegisterController@register');
Route::post('/register', 'RegisterController@postRegister');
Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postLogin');

Route::post('/logout','LoginController@logout');

Route::get('/home', 'HomeController@home');

Route::get('/profile', 'ProfileFmmbController@profile');
Route::get('/sejarah', 'ProfileFmmbController@sejarah');