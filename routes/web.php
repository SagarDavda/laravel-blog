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

Route::get('/','PagesController@home');
Route::get('/about-me','PagesController@aboutme');
Route::get('/contact-me','PagesController@contactme');
Route::resource('blog', 'BlogController');

// Route::get('/blog','BlogController@index');
// Route::get('/blog/create','BlogController@create');
// Route::post('/blog','BlogController@store');
