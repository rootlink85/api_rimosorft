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

//Ejemplo 1
//Route::resource('posts','Api\PostController')->except(['create','edit']);

//Ejemplo 2
//Route::resource('posts','Api\PostController')->only(['create','edit']);

//Ejemplo 3

//Route::apiResource('posts','Api\PostController');
