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

Route::get('/', 'PostController@index')->name('home');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::get('/register','RegisterController@create');
Route::post('/register','RegisterController@store');

Route::get('/about','AboutController@index');

Route::get('/login','SessionController@create')->name('login');
Route::post('/login','SessionController@store');
Route::get('/logout','SessionController@destroy');
