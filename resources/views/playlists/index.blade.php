@extends('layouts.app')

@section('content')
    <h1>Playlists</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Text</th>
                <th>Publish date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($playlists as $playlist)
                <tr>
                    <td>{{ $playlist->name }}</td>
                    <td>{{ $playlist->excerpt }}</td>
                    <td>{{ $playlist->publish_date->format('d/m/Y') }}</td>
                    <td>actions</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection