<?php

Route::group(['namespace' => 'App\Components\Users\Admin'], function()
{
    Route::delete('users/destroy', 'UsersController@destroyMultiple')
        ->name('users.destroy.multiple');

    Route::resource('users', 'UsersController');
});
