@extends('front.layouts.app')

@section('content')

    <div clas="row">
        @include('front._partials.searchForm')
    </div>

    <h1>Search results for "{{ $query }}"</h1>

    <hr>

    @if(! empty($query))
        @forelse($playlists as $playlist)
            <div class="row">
                <h2>
                    <a href="{{ action('Front\PlaylistsController@detail', [$playlist->slug]) }}">
                        {{ $playlist->name }}
                    </a>
                </h2>

                {!! $playlist->text !!}
            </div>
        @empty
            <div class="alert alert-warning" role="alert">No playlists found</div>
        @endforelse
    @endif
@endsection