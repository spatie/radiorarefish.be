@extends('front.layouts.app')

@section('content')

    <div class="row">
        @foreach($playlists as $playlist)
            <h2>
                <a href="{{ action('Front\PlaylistsController@detail', [$playlist->slug]) }}">
                    {{ $playlist->name }}
                </a>
            </h2>

            {!! $playlist->text !!}
        @endforeach
    </div>

@endsection