<?php

namespace Notifly\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use Notifly\Notifly;

class NotiflyServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('notifly', function () {
            return new Notifly();
        });
    }
}
