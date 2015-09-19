<?php

namespace Signalert\Facades;

use Illuminate\Support\Facades\Facade;

class Signalert extends Facade
{
    /**
     * Gets the registered name of the component
     *
     * @see \Signalert\Signalert
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'signalert';
    }
}
