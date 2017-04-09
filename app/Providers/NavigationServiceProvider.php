<?php

namespace App\Providers;

use Menu;
use Illuminate\Support\ServiceProvider;

class NavigationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Menu::macro('main', function () {
            return Menu::new()
               ->addClass('nav navbar-nav')
               ->action('Front\ArticlesController@about', 'About')
               ->action('Front\ArticlesController@howToListen', 'How to listen')
               ->setActiveFromRequest();
        });
    }
}
