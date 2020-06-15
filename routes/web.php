<?php

use Illuminate\Support\Facades\Route;
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
    return redirect('products');
});

Route::get('/products','ProductControllers\IndexProductsController@execute')->name('indexProductForm');
Route::view('/products/new','new')->name('newProductForm');
Route::post('/products','ProductControllers\CreateProductController@execute')->name('createProduct');