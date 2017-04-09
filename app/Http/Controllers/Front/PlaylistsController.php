<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Playlist;

class PlaylistsController extends Controller
{
    public function index()
    {
        $playlists = Playlist::get();

        return view('front.playlists.index', compact('playlists'));
    }
}
