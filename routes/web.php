<?php

Route::view('/', 'home');

Route::resource('brands', 'BrandsController')->middleware('auth');
Route::resource('models', 'ModelsController')->middleware('auth');
Route::resource('vehicles', 'VehiclesController')->middleware('auth');
Route::resource('customers', 'CustomersController')->middleware('auth');

Auth::routes();

Route::get('home', function () {
    return view('home');
});
