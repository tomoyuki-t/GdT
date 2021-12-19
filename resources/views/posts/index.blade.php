@extends('layout')

@section('header')
    @auth
        <a href="{{ route('posts.create') }}" class="btn">Post</a>
    @endauth
@endsection

@section('content')
    <h1>List</h1>
    <hr/>
    @foreach ($posts as $post)
    <div class='container'>
        <div class='post'>
            <h3>
                <a href="{{url('posts', $post->id)}}">
                    {{ $post->title }}
                </a>
            </h3>
            <p>{{ $post->area->prefecture }}</p>
        </div>
    </div>
    @endforeach
@endsection