@extends('layout')


@section('content')
    <h1>{{ $post->user->name }}</h1>
    <div class='show-container'>
        <h2>{{ $post->title }}</h2>
        <h3>
            {{ $post->area->prefecture}}<br>
        </h3>
        <h3>
            {{ $post->body }}
        </h3>
    </div>
@endsection