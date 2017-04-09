<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Playlist;

class SearchController extends Controller
{
    public function index()
    {
        $query = request()->get('query');

        $playlists = Playlist::search($query)->get();

        return view('front.search.index', compact('query', 'playlists'));
    }
}