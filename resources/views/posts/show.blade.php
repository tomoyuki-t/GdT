@extends('layout')


@section('content')
    <h1>{{ $post->user->name }}</h1>
    <h3>{{ $post->title }}</h2>
    <h4>
        {{ $post->area->prefecture}}<br>
    </h4>
    <h4>
        {{ $post->body }}
    </h4>
    
@endsection