<?php

namespace App\Http\Controllers\Front;

use App\Playlist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->get('query');

        $playlists = Playlist::search($request->get('request'))->get();

        return view('front.search.index', compact('query', 'playlists'));
    }
}
