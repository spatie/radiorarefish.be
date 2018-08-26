<?php

namespace App\Http\Controllers;

use App\Playlist;
use App\Http\Controllers\Controller;

class PlaylistsController extends Controller
{
    public function index()
    {
        $playlists = Playlist::orderByDesc('publish_date')->simplePaginate(15);

        return view('front.playlists.index', compact('playlists'));
    }

    public function detail($slug)
    {
        abort_unless($playlist = Playlist::where('slug', $slug)->first(), 404);

        return view('front.playlists.detail', compact('playlist'));
    }
}
