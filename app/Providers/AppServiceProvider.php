<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\pagination\paginator;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        \Illuminate\Support\Facades\View::share('name','unknown');
//        Blade::directive('mark', function ($p){
//            return '<mark>'.$p.'</mark>';
//
//        });
        paginator::useBootstrap();
    }
}
