<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class TemporaryCart extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'temporary-cart';
    }
}
