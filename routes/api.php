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

Route::middleware(['auth:api'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',"Api\UserController@register");
Route::post('login',"Api\UserController@login");

Route::middleware(['auth:api'])->group(function(){
    Route::get('brands',"Api\ProductController@brands");
    Route::get('categories',"Api\ProductController@categories");
    Route::get('products',"Api\ProductController@products");
    Route::post('add/product',"Api\ProductController@create");
    Route::put('change_password/{id}',"Api\UserController@change_password");
    Route::post('logout',"Api\UserController@logout");

    Route::delete('delete/order/{id}',"Api\OrderController@destroy");
    Route::post('order/add',"Api\OrderController@create");
    Route::get('orders',"Api\OrderController@index");
});

