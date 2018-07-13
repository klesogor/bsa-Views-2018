<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Blade::component('components.currencyRow','currencyRow');
        Blade::component('components.footer','footer');
        Blade::component('components.header','header');
        Blade::component('components.currencyAddForm','currencyAddForm');
        Blade::component('components.currencyEditForm','currencyEditForm');
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
