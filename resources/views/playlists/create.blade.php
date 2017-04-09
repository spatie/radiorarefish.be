@extends('layouts.app')

@section('content')

    <h1>New playlist/h1>

    <form action="{{ action('NewsItemController@store') }}" method="POST">
        @include('newsItems._partials.form', ['submitText' => 'Create'])
    </form>

@endsection