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
Route::get('/', 'HomePageController@index')->name('homepage');
Route::get('/category/{slug_categoryname}', 'CategoryController@index')->name('category');
Route::get('/product/{slug_productname}', 'ProductController@index')->name('product');
Route::get('/shoppingcart', 'ShoppingCartController@index')->name('shoppingcart');
Route::get('/payment', 'PaymentController@index')->name('payment');
Route::get('/orders', 'OrderController@index')->name('orders');
Route::get('/orderdetails/{id}', 'OrderController@orderDetails')->name('orderdateils');
Route::get('/user/signin', 'UserController@signInForm')->name('user.signin');
Route::get('/user/register', 'UserController@registerForm')->name('user.register');
