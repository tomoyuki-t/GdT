@extends('layout')


@section('content')
<div class='show-container'>
    <h1>{{ $post->title }}</h1>
    <h2>
        {{ $post->area->prefecture}}<br>
        {{ $post->body }}
    </h2>
</div>
    
@endsection