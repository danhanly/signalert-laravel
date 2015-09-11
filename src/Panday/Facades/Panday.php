<?php

namespace Panday\Facades;

use Illuminate\Support\Facades\Facade;

class Panday extends Facade
{
    /**
     * Gets the registered name of the component
     *
     * @see \Panday\Panday
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'panday';
    }
}
