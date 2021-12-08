@extends('layout')


@section('content')
<div class='show-container'>
    <h1>{{ $post->user->name }}</h1>
    <h2>{{ $post->title }}</h2>
    <h3>
        {{ $post->area->prefecture}}<br>
        {{ $post->body }}
    </h3>
</div>
    
@endsection