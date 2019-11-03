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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login/{mobileNumber}/{password}', 'ApiController@login');

Route::post('/register', 'ApiController@register');

Route::get('/products', 'ApiController@products');

Route::post('/order', 'ApiController@createOrder');

Route::get('/notifications/{id}', 'ApiController@notifications');
