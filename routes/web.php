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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminHomeController@index')->name('home');

Route::get('/', 'AdminHomeController@index')->name('home');

// Products
Route::get('/products', 'AdminProductsController@index')->name('products');
Route::get('/product-view/{id}', 'AdminProductsController@view');
Route::get('/product-create', 'AdminProductsController@create');
Route::post('/product-store', 'AdminProductsController@store');
Route::get('/product-destroy/{id}', 'AdminProductsController@destroy');

// Orders
Route::get('/orders', 'AdminOrdersController@index')->name('orders');
Route::get('/order-view/{orderNumber}', 'AdminOrdersController@view');
Route::get('/order-create', 'AdminOrdersController@create');
Route::post('/order-store', 'AdminOrdersController@store');
Route::get('/order-ready/{orderNumber}', 'AdminOrdersController@orderReady');

// Users
Route::get('/users', 'AdminUsersController@index')->name('users');

// Mail
Route::get('/mail', 'AdminMailController@index')->name('mail');
Route::get('/mail-view/{id}', 'AdminNewsController@view');
