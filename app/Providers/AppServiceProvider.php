<?php

namespace App\Providers;

use App\Facades\TemporaryCart as TemporaryCartFacade;
use App\Supports\TemporaryCart;
use Illuminate\Foundation\AliasLoader;
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
        $loader = AliasLoader::getInstance();
        $loader->alias('TemporaryCart', TemporaryCartFacade::class);

        $this->app->singleton('temporary-cart', function () {
            return new TemporaryCart();
        });
    }
}
