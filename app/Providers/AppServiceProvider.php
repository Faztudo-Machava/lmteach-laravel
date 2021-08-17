<?php

namespace App\Providers;

use Carbon\Laravel\ServiceProvider as LaravelServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends LaravelServiceProvider
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
        Schema::defaultStringLength(191);
    }
}
