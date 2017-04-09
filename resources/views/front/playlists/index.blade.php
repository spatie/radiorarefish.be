@extends('front.layouts.app')

@section('content')



    @foreach($playlists as $playlist)
        <div class="row">
            <h2>
                <a href="{{ action('Front\PlaylistsController@detail', [$playlist->slug]) }}">
                    {{ $playlist->name }}
                </a>
            </h2>

            {!! $playlist->text !!}
        </div>
    @endforeach

    <div class="row">
        {!! $playlists->links() !!}
    </div>

@endsection