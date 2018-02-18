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

Route::get('/', 'MainPageController@index');
Route::get('/products', 'ProductsPageController@index');
Route::get('/products/{product}', 'ProductsPageController@show')->name('product.show');
Route::get('/cart', 'CartController@index');
// Route::get('/products', 'products');
// Route::get('/product', function(){
//   return view('product');
// });
// Route::get('/cart', 'cart');
// Route::get('/checkout', 'checkout');
// Route::get('/thankyou', 'thankyou');
