@extends('front.layouts.app')

@section('content')

    <h1>Search playlists</h1>

    @if(! empty($query))
        <h4>Searchresults for "{{ $query }}"</h4>

        @forelse($playlists as $playlist)
            {{ $playlist->name }}
        @empty
            <div class="alert alert-warning" role="alert">No playlists found</div>
        @endforelse
    @endif
@endsection