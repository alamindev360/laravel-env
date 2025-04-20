<?php

namespace AlaminDev360\SetEnv\Providers;
 
use Illuminate\Support\ServiceProvider;
use AlaminDev360\SetEnv\Commands\SetEnvCommand;
use AlaminDev360\SetEnv\Env;

final class SetEnvServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind('alamindev360-set-env', function ($app) {
            return new Env();
        });
    }

    public function boot(): void
    {
        $this->commands(
            [
                SetEnvCommand::class,
            ],
        );
    }
}