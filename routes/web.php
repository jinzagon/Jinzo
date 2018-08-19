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

Auth::routes();

Route::get('/', 'WebController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/offers', 'OfferController@index');
Route::get('/admin/offers/create', 'OfferController@create');
Route::post('/admin/offers/store', 'OfferController@store');
