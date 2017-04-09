@extends('layouts.app')

@section('content')

    <h1>Playlists</h1>

    @include('_partials.flashMessage')

    <a class="btn btn-primary" href="{{ action('PlaylistsController@create') }}">New item</a>

    <table class="table">
        <thead>
        <th>Name</th>
        <th>Publish date</th>
        <th></th>
        </thead>
        <tbody>

        @foreach($playlists as $playlist)
            <tr>
                <td><a href="{{ action('PlaylistsController@edit', [$playlist->id]) }}">{{ $playlist->name }}</a></td>
                <td>{{ $playlist->publish_date->format('d.m.Y') }}</td>
                <td>@include('_partials.deleteButton', ['url' => action('PlaylistsController@destroy', [$playlist->id])])</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection