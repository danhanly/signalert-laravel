<?php

namespace Signalert\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use Signalert\Signalert;

class SignalertServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('signalert', function () {
            return new Signalert(env('SIGNALERT_CONFIG_PATH', ''));
        });
    }
}
