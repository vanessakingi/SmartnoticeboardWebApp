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

Route::get('/', [ 'as' => 'login', 'uses' => 'NoticesController@index']);
Route::get('login','NoticesController@login');
Route::post('loginuser','NoticesController@loginuser');
Route::get('register','NoticesController@register');
Route::post('create','NoticesController@createuser');
Route::get('upload','NoticesController@upload');
Route::post('uploadpic','NoticesController@uploadpic');
Route::get('about','NoticesController@about');
Route::get('news','NoticesController@news');
Route::get('contact','NoticesController@contact');
Route::get('index','NoticesController@index');
Route::get('loadImages', 'NoticesController@loadImages');
