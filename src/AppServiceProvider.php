<?php

namespace LaravelEnso\Sentry;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
    }
}
