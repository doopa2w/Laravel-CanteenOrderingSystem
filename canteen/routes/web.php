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
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::resource('/orders', 'Customer\OrdersController', ['except' => ['update','edit', 'create']]);
Route::post('/orders/create', 'Customer\OrdersController@create');

Route::get('/foods/category/{category}', 'Customer\FoodsController@showCat');
Route::resource('/foods', 'Customer\FoodsController', ['except' => ['store', 'create','update','destroy','edit']]);

Route::resource('/posts', 'Customer\PostsController', ['except' => ['store', 'create','update','destroy','edit']]);