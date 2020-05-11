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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PostsController@index')->name('top');
Route::get('/create', 'PostsController@create')->name('posts.create');
Route::post('/store', 'PostsController@store')->name('posts.store');
Route::get('/show/{post_id}', 'PostsController@show')->name('posts.show');
Route::get('/edit', 'PostsController@edit')->name('posts.edit');
