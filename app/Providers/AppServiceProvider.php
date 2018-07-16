<?php

namespace App\Providers;

use App\Services\CurrencyRepository;
use App\Services\CurrencyRepositoryInterface;
use App\Services\UserRepository;
use App\Services\UserRepositoryInterface;
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

        $this->app->singleton(CurrencyRepositoryInterface::class, CurrencyRepository::class);
        //never used though
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
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
