@extends('front.layouts.app')

<a href="{{ action('Front\PlaylistsController@index') }}">
    Back to list
</a>

@section('content')
    <h1>{{ $playlist->name }}</h1>

    {!! $playlist->text !!}
@ensection