<?php

Route::get('/', function()
{
    return view('index');
});

Route::resource('brands', 'BrandsController');
Route::resource('models', 'ModelsController');
Route::resource('vehicles', 'VehiclesController');
Route::resource('customers', 'CustomersController');
Route::view('test', 'test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
