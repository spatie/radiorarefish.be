<?php

Auth::routes();

Route::prefix('admin')
    ->middleware('auth')
    ->namespace('Back')
    ->group(function () {
        Route::resource('playlists', 'PlaylistsController');
    });

Route::namespace('Front')->group(function() {
    Route::get('/', 'PlaylistsController@index');
    Route::get('/{slug}', 'PlaylistsController@detail');

    Route::get('search', function (\Illuminate\Http\Request $request) {
        return \App\Playlist::search($request->search)->get();
    });
});

