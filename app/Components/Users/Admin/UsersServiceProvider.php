<?php

namespace App\Components\Users\Admin;

use Illuminate\Support\ServiceProvider;

class UsersServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->bind(UsersRepositoryContract::class, UsersRepository::class);
    }

    public function provides()
    {
        return [UsersRepositoryContract::class];
    }
}
