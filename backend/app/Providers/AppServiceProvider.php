<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Illuminate\Support\Facades\URL;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->environment('local') == "production") {
            URL::forceScheme('https');    
        }
        
        app('view')->composer('portal.template', function ($view) {
            $action = app('request')->route()->getAction();

            $fullActionName = class_basename($action['controller']);
            
            list($controller, $action) = explode('@', $fullActionName);
            $controller = str_replace('controller', '', strtolower($controller));
            $authUser = User::getAdmin();
            
            $view->with(compact('controller', 'action', 'fullActionName', 'authUser'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
