<?php

namespace Notifly\Facade;

use Illuminate\Support\Facades\Facade;

class Notifly extends Facade
{
    /**
     * Gets the registered name of the component
     *
     * @see \Notifly\Notifly
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'notifly';
    }
}
