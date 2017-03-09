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

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();
Route::get('/user', function() { return View::make("user"); });
Route::get('/api/v1/user/{id?}', 'UserController@index');
Route::post('/api/v1/user', 'UserController@store');
Route::post('/api/v1/user/{id}', 'UserController@update');
Route::delete('/api/v1/user/{id}', 'UserController@destroy');