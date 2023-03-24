<?php

namespace DoText\LaravelAdnSms\Providers;

use Illuminate\Support\ServiceProvider;

class AdnSmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/adn.php' => config_path('adn.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/adn.php',
            'adn'
        );
    }
}
