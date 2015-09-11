<?php

namespace Panday\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use Panday\Panday;

class PandayServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('panday', function () {
            return new Panday();
        });
    }
}
