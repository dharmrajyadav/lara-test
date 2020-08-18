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
    return view('users.addProduct');
});




 Route::post('login', 'ProductDetails@getProductdetails');

 Route::post('productData','ProductData@getProductData');
 Route::get('ProductDetails','ProductData@getProductDetails');

 Route::get('/laraTest', function () {
    return view('users.laratestView');
});

Route::post('/laraTestData','ProductData@laraTestData');

Route::get('/ProductDetailsLaraTest','ProductData@getproductLaraTest');




