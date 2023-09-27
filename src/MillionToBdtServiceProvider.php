<?php

namespace Touhid\MillionToBdt;

use Illuminate\Support\ServiceProvider;

class MillionToBdtServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'million-to-bdt');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/million-to-bdt.php', 'million-to-bdt');

        $this->publishes([
            __DIR__.'/config/million-to-bdt.php' => config_path('million-to-bdt.php'),
        ]);
    }

    public function register(){

    }
}
