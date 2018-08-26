@extends('front.layouts.app')

@section('content')
    <a href="{{ action('PlaylistsController@index') }}">
        <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
        Back to all playlists
    </a>

    <h1>{{ $playlist->name }}</h1>

    {!! $playlist->formatted_text !!}
@endsection