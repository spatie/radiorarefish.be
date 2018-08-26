<?php

namespace App\Providers;

use Laravel\Nova\Nova;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    protected function gate()
    {
        Gate::define('viewNova', function () {
            return auth()->check();
        });
    }

    protected function tools()
    {
        return [];
    }

    protected function cards()
    {
        return [
            new Help,
        ];
    }
}
