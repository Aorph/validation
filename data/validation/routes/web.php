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

Route::get('/', 'NavController@showStore');
Route::get('/insert', 'NavController@insert');

Route::post('/update', 'NavController@update');
Route::post('/inserted', 'StockController@insertIntoDB');
Route::post('/updated', 'StockController@updateIntoDB');
Route::post('/delete', 'StockController@delete');
