<?php

use Gloudemans\Shoppingcart\Facades\Cart;

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
Route::get('/products', 'ProductsPageController@index')->name('product.product');
Route::get('/products/{product}', 'ProductsPageController@show')->name('product.show');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/save-for-later/{product}', 'CartController@saveForLater')->name('cart.saveforlater');

Route::delete('/saveforlater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveforlater/save-for-later/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.saveforlater');

Route::get('/checkout', 'CheckOutController@index')->name('checkout.index');

// Route::get('/products', 'products');
Route::get('/empty', function(){
  Cart::destroy();
});
// Route::get('/cart', 'cart');
// Route::get('/checkout', 'checkout');
// Route::get('/thankyou', 'thankyou');
