@extends('layouts.app')

@section('content')

    <h1>New playlist/h1>

    <form action="{{ action('PlaylistsController@store') }}" method="POST">
        @include('playlists._partials.form', ['submitText' => 'Create'])
    </form>

@endsection