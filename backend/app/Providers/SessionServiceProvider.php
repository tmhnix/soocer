<?php

namespace App\Providers;

use App\Extensions\AuthSessionHandler;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class SessionServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Session::extend('auth', function ($app) {
            // Return an implementation of SessionHandlerInterface...
            return new AuthSessionHandler;
        });
    }
}