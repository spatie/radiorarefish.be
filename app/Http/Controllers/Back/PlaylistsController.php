<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlaylistRequest;
use App\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PlaylistsController extends Controller
{
    public function index()
    {
        $playlists = Playlist::orderBy('publish_date', 'asc')->get();

        return view('back.playlists.index')->with(compact('playlists'));
    }

    public function create()
    {
        $playlist = new Playlist();

        return view('back.playlists.create')->with(compact('playlist'));
    }

    public function store(PlaylistRequest $request)
    {
        (new Playlist())->updateFromRequest($request);

        Session::flash('message', 'The newsItem has been created');

        return redirect()->action('Back\PlaylistsController@index');
    }

    public function show(Playlist $playlist)
    {
        return redirect()->action('Back\PlaylistsController@index');
    }

    public function edit(Playlist $playlist)
    {
        return view('back.playlists.edit', compact('playlist'));
    }

    public function update(PlaylistRequest $request, Playlist $playlist)
    {
        $playlist->updateFromRequest($request);

        Session::flash('message', 'The newsItem has been created');

        return back();
    }

    public function destroy(Playlist $playlist)
    {
        $playlist->delete();

        Session::flash('message', 'The playlist has been deleted');

        return back();
    }
}
