<?php

namespace Tnhnclskn\DebugWhitelist;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->singleton('debug-whitelist', function ($app) {
            return new DebugWhitelist($app['config']['debug-whitelist']);
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/debug-whitelist.php' => config_path('debug-whitelist.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__ . '/../config/debug-whitelist.php', 'debug-whitelist');

        if ($this->app['config']['debug-whitelist.ip_addresses']) {
            $this->app['debug-whitelist']->addIpAddresses($this->app['config']['debug-whitelist.ip_addresses']);
        }

        if ($this->app['config']['debug-whitelist.enabled'] && $this->app['debug-whitelist']->isWhitelisted()) {
            $this->app['config']['app.debug'] = true;
        }
    }
}
