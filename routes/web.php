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

// Route::get('/', 'main');
// Route::get('/products', 'products');
// Route::get('/product', 'product');
// Route::get('/cart', 'cart');
// Route::get('/checkout', 'checkout');
// Route::get('/thankyou', 'thankyou');

Route::get('/', function(){
  return view('main');
});
