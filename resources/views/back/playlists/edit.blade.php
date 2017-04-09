@extends('back.layouts.app')

@section('content')

    <h1>{{ $playlist->name }}</h1>

    <form method="POST" action="{{ action('Back\PlaylistsController@update', $playlist->id) }}">
        <input type="hidden" name="_method" value="PATCH">

        @include('back.playlists._partials.form', ['submitText' => 'Update'])
    </form>

@endsection