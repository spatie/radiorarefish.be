@extends('front.layouts.app')

@section('content')

    <div class="row">
        @foreach($playlists as $playlist)
            @include('front._partials.playlist')
        @endforeach
    </div>

@endsection