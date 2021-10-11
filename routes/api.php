<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', '\App\Http\Controllers\UserController@index');
Route::get('/user', '\App\Http\Controllers\UserController@user')->middleware('auth:api');
Route::post('/register', '\App\Http\Controllers\UserController@register');
Route::get('/products','\App\Http\Controllers\ProductController@index');
Route::post('/products','\App\Http\Controllers\ProductController@store');
Route::put('/products/{id}','\App\Http\Controllers\ProductController@update');
Route::delete('/products/{id}','\App\Http\Controllers\ProductController@destroy');
Route::get('/products/{id}','\App\Http\Controllers\ProductController@show');


