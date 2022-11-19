<?php

namespace Rudolphp\LaravelTextlocal\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rudolphp\LaravelTextlocal\LaravelTextlocal
 */
class LaravelTextlocal extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rudolphp\LaravelTextlocal\LaravelTextlocal::class;
    }
}
