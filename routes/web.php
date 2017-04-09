<?php

Auth::routes();

Route::prefix('admin')
    ->middleware('auth')
    ->namespace('Back')
    ->group(function () {
        Route::resource('playlists', 'PlaylistsController');
    });

Route::namespace('Front')->group(function() {
    Route::get('search', 'SearchController@index');

    Route::get('/', 'PlaylistsController@index');
    Route::get('/playlist/{slug}', 'PlaylistsController@detail');
});

