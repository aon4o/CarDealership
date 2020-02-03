<?php

Route::view('/', 'home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('brands', 'BrandsController');
    Route::resource('models', 'ModelsController');
    Route::resource('vehicles', 'VehiclesController');
    Route::resource('customers', 'CustomersController');
    Route::resource('users', 'UsersController');
});


Auth::routes();
