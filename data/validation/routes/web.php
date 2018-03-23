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
//INSTRUMENTS ROUTES
Route::get('/', 'NavController@showInstruments');
Route::get('/instruments', 'NavController@showInstruments');
Route::get('/insertInstruments', 'NavController@insertInstruments');

Route::post('/updateInstrument', 'NavController@updateInstrument');
Route::post('/insertedInstrument', 'StockController@insertInstrumentIntoDB');
Route::post('/updatedInstrument', 'StockController@updateInstrumentIntoDB');
Route::post('/deleteInstrument', 'StockController@deleteInstrument');

//CD ROUTES
Route::get('/cds', 'NavController@showCDs');
Route::get('/insertCD', 'NavController@insertCD');

Route::post('/insertedCD', 'StockController@insertCDIntoDB');
Route::post('/updateCD', 'NavController@updateCD');
Route::post('/updatedCD', 'StockController@updateCDIntoDB');
Route::post('/deleteCD', 'StockController@deleteCD');

//GENRE ROUTES
Route::get('/addGenre', 'GenreController@addGenre');

Route::post('insertGenre', 'GenreController@insertGenre');
