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

Route::get('/','PagesController@index');
Route::get('/new','PagesController@new');
Route::get('/profile','PagesController@profile');
Route::get('/history','PagesController@history');
Route::get('/new_grievance','PagesController@new_grievance');

Route::resource('grievances','PostsController');