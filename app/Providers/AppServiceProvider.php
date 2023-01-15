<?php

namespace App\Providers;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        // View::composer('errors::*', function($view){
        //     $view->with('profile', auth()->user());

        // });

        View::composer('error::*',function($view){
            $view->with('profile',auth()->user());
        });
    }
}
