<?php

Auth::routes();

Route::prefix('admin')
    ->middleware('auth')
    ->namespace('Back')
    ->group(function () {
        Route::get('/', function () {
            return redirect()->action('Back\PlaylistsController@index');
        });
        Route::resource('playlists', 'PlaylistsController');
    });

Route::namespace('Front')->group(function () {
    Route::get('search', 'SearchController@index');

    Route::get('how-to-listen', 'ArticlesController@howToListen');
    Route::get('about', 'ArticlesController@about');

    Route::get('/', 'PlaylistsController@index');
    Route::get('/playlist/{slug}', 'PlaylistsController@detail');
});
