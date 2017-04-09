

@extends('layouts.app')

@section('content')

    <h1>{{ $playlist->name }}</h1>

    <form method="POST" action="{{ action('NewsItemController@update', $playlist->id) }}">
        <input type="hidden" name="_method" value="PATCH">

        @include('newsItems._partials.form', ['submitText' => 'Update'])
    </form>

@endsection