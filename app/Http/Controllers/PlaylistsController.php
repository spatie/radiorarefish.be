<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaylistRequest;
use App\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PlaylistsController extends Controller
{
    public function index()
    {
        $playlists = Playlist::orderBy('publish_date', 'asc')->get();

        return view('playlists.index')->with(compact('playlists'));
    }

    public function create()
    {
        $playlist = new Playlist();

        return view('playlists.create')->with(compact('playlist'));
    }

    public function store(PlaylistRequest $request)
    {
        (new Playlist())->updateFromRequest($request);

        Session::flash('message', 'The newsItem has been created');

        return redirect()->action('PlaylistsController@index');
    }

    public function show(Playlist $playlist)
    {
        return redirect()->action('PlaylistController@index');
    }

    public function edit(Playlist $playlist)
    {
        //
    }

    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    public function destroy(Playlist $playlist)
    {
        $playlist->delete();

        Session::flash('message', 'The playlist has been deleted');

        return back();
    }
}
