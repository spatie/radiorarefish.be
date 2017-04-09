@extends('front.layouts.app')

@section('content')

    <h1>Search playlists</h1>

    <div clas="row">
        @include('front._partials.searchForm')
    </div>

    <hr>

    @if(! empty($query))
        <h4>Results for "{{ $query }}"</h4>

        @forelse($playlists as $playlist)
            <div class="row">
                {{ $playlist->name }}
            </div>
        @empty
            <div class="alert alert-warning" role="alert">No playlists found</div>
        @endforelse
    @endif
@endsection