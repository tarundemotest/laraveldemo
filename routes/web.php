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

Route::get('/', 'FilmsController@index');

Auth::routes();

Route::get('filmsadmin', 'FilmsController@indexadmin');
Route::get('films/{slug}', 'FilmsController@indexdetails');
Route::resource('films', 'FilmsController');

Route::get('/home', 'HomeController@index')->name('home');
