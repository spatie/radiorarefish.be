@extends('front.layouts.app')

@section('content')
    <a href="{{ action('Front\PlaylistsController@index') }}">
        <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
        Back to list
    </a>

    <h1>{{ $playlist->name }}</h1>

    {!! $playlist->text !!}
@endsection