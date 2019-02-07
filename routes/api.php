<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/v1/books/list', 'BookController@getAll');
Route::get('/v1/books/{id}', 'BookController@get');
Route::post('/v1/books', 'BookController@add')->middleware('isAdmin');
Route::post('/v1/books/{id}', 'BookController@edit')->middleware('isAdmin');
Route::delete('/v1/books/{id}', 'BookController@remove')->middleware('isAdmin');

Route::get('/v1/users/list', 'UserController@getAll')->middleware('isAdmin');
Route::get('/v1/users/{id}', 'UserController@get')->middleware('isAdmin');
Route::post('/v1/users', 'UserController@add')->middleware('isAdmin');
Route::post('/v1/users/{id}', 'UserController@edit')->middleware('isAdmin');
Route::delete('/v1/users/{id}', 'UserController@remove')->middleware('isAdmin');
