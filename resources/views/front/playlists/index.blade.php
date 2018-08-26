@extends('front.layouts.app')

@section('content')

    @foreach($playlists as $playlist)

            <h2>
                <a href="{{ action('PlaylistsController@detail', [$playlist->slug]) }}">
                    {{ $playlist->name }}
                </a>
            </h2>

            {!! $playlist->formatted_text !!}

    @endforeach

    <div>
        {!! $playlists->links() !!}
    </div>

@endsection