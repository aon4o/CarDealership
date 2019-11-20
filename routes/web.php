<?php

Route::get('/welcome', function()
{
    return view ('welcome');
});

Route::get('/about', function()
{
    return view ('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('articles', function()
{
    return view('articles', [
        'articles' => App\Article::latest()->get()
    ]);
});

Route::get('articles/{article}', 'ArticlesController@show');
