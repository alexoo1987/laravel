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

Route::get('/', 'Controller@test');

Route::get('/blogs','BaseController@list');

Route::get('/blogs/{id}','BaseController@thisArticle');

//Route::get('/login','BaseController@login');
Route::get('/test','BaseController@test');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'BaseController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
