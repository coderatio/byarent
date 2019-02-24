<?php

namespace App\Providers;

use App\Facades\ByarentCart as ByarentCartFacade;
use App\Supports\ByarentCart;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\URL;
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
        $loader->alias('ByarentCart', ByarentCartFacade::class);

        $this->app->singleton('byarent-cart', function () {
            return new ByarentCart();
        });

        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
