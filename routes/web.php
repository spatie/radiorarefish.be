<?php

Route::get('search', 'SearchController@index');

Route::get('how-to-listen', 'ArticlesController@howToListen');
Route::get('about', 'ArticlesController@about');

Route::get('/', 'PlaylistsController@index');
Route::get('/playlist/{slug}', 'PlaylistsController@detail');
