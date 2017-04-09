@extends('layouts.app')

@section('content')
    @include('_partials.flashMessage')

    <h1>Playlists</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Text</th>
                <th>Publish date</th>
                <th>User</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($playlists as $playlist)
                <tr>
                    <td>{{ $playlist->name }}</td>
                    <td>{{ $playlist->excerpt }}</td>
                    <td>{{ $playlist->publish_date->format('d/m/Y') }}</td>
                    <td>{{ $playlist->user->name }}</td>
                    <td>@include('_partials.deleteButton', ['url' => action('PlaylistsController@destroy', [$playlist->id])])</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection