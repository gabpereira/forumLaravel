<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;  // <== Mandatory for production use

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);  // <== Mandatory for production use
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