<?php

// Back-end routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function()
{
    Route::group(['namespace' => 'App\Http\Controllers'], function()
    {
        Route::get('login', 'Auth\LoginController@showLoginForm')->name("show-login");
        Route::post('login', 'Auth\LoginController@login')->name("login");
        Route::get('/', 'AdminController@index')->name("index")->middleware('auth');
    });

    Route::group(['middleware' => 'auth'], function()
    {
        require_once app_path().'/Components/Users/Admin/routes.php';
    });
});

// Front-end routes
Route::group(['as' => 'site.'], function()
{
    //
});
