<?php

Route::get('/', function()
{
    return view('index');
});

Route::resource('brands', 'BrandsController')->middleware('auth');
Route::resource('models', 'ModelsController')->middleware('auth');
Route::resource('vehicles', 'VehiclesController')->middleware('auth');
Route::resource('customers', 'CustomersController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
