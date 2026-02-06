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

Route::get('/', 'Customer\DisplayController@index')->name('customer.index');
Route::get('/about', 'Customer\DisplayController@about')->name('customer.about');
Route::get('/product', 'Customer\DisplayController@product')->name('customer.product');
Route::get('/contact', 'Customer\DisplayController@contact')->name('customer.contact');
Route::get('/service', 'Customer\DisplayController@service')->name('customer.service');
Route::get('/recruitment', 'Customer\DisplayController@recruitment')->name('customer.recruitment');
Route::get('/documents', 'Customer\DisplayController@documents')->name('customer.documents');
Route::get('/login', 'Customer\DisplayController@login')->name('login');