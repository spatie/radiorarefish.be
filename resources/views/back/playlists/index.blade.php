@extends('back.layouts.app')

@section('content')

    <h1>Playlists</h1>

    <a class="btn btn-primary" href="{{ action('Back\PlaylistsController@create') }}">New item</a>

    <table class="table">
        <thead>
        <th>Name</th>
        <th>Publish date</th>
        <th></th>
        </thead>
        <tbody>

        @foreach($playlists as $playlist)
            <tr>
                <td><a href="{{ action('Back\PlaylistsController@edit', [$playlist->id]) }}">{{ $playlist->name }}</a></td>
                <td>{{ $playlist->publish_date->format('d.m.Y') }}</td>
                <td>@include('back._partials.deleteButton', ['url' => action('Back\PlaylistsController@destroy', [$playlist->id])])</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection