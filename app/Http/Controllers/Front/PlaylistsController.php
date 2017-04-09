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

    public function detail($slug)
    {
        abort_unless($playlist = Playlist::where('slug', $slug)->first(), 404);

        return view('front.playlists.detail', compact('playlist'));
    }
}
