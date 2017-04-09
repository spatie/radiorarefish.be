@extends('back.layouts.app')

@section('content')

    <h1>New playlist</h1>

    <form action="{{ action('Back\PlaylistsController@store') }}" method="POST">
        @include('back.playlists._partials.form', ['submitText' => 'Create'])
    </form>

@endsection