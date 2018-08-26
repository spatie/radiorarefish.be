<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Menu;

class NavigationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Menu::macro('main', function () {
            return Menu::new()
               ->addClass('nav navbar-nav')
               ->action('ArticlesController@about', 'About')
               ->action('ArticlesController@howToListen', 'How to listen')
               ->setActiveFromRequest();
        });
    }
}
