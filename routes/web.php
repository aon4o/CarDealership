<?php

Route::get('/', function()
{
    return view('index');
});
Route::get('/brands', function()
{
    return view('brands');
});
Route::get('/customers', function()
{
    return view('customers');
});
Route::get('/models', function()
{
    return view('models');
});
Route::get('/rented_cars', function()
{
    return view('rented_cars');
});
Route::get('/vehicles', function()
{
    return view('vehicles');
});
