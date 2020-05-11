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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'order'], function () {
    Route::get('/', 'OrderController@index')->name('order.list');
    Route::get('/create', 'OrderController@create')->name('order.create');
    Route::get('/edit/{id}', 'OrderController@edit')->name('order.edit');
    Route::post('/postOrder', 'OrderController@store')->name('order.store');
    Route::post('/updateOrder', 'OrderController@update')->name('order.update');
    Route::post('/read', 'OrderController@read')->name('order.read');
    Route::get('/export', 'OrderController@export')->name('order.export');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
