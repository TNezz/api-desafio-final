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

Route::get('products', 'ProductsController@getAll')->name('getAllProducts');
Route::post('products', 'ProductsController@add')->name('addProducts');
Route::get('products/{_id}', 'ProductsController@get')->name('getProducts');
Route::post('products/{_id}', 'ProductsController@edit')->name('editProducts');
Route::get('products/delete/{_id}', 'ProductsController@delete')->name('deleteProducts');