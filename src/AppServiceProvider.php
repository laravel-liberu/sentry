<?php

namespace LaravelLiberu\Sentry;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->load()
            ->publish();
    }

    private function load(): self
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        $this->mergeConfigFrom(__DIR__.'/../config/sentry.php', 'liberu.sentry');

        return $this;
    }

    private function publish()
    {
        $this->publishes([
            __DIR__.'/../config' => config_path('liberu'),
        ], ['liberu-sentry-config', 'liberu-config']);
    }
}
