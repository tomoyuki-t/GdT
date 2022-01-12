@extends('layout')

@section('content')
    @if($user->id == Auth::id())
        <h1>My Page</h1>
    @else
        <h1>{{ $user->name }}</h1>
    @endif

    @if($user->id == Auth::id())
        <h2>Applied</h2>
        @if(!isset($myAppliedPosts[0]))
            <h3>No applied</h3>
        @endif
        <div class='apply-container'>
            @foreach($myAppliedPosts->unique('user_id') as $myAppliedPost)
                <div class='applied-user'>
                    <h3><a href="{{ url('users', $myAppliedPost->user_id) }}">{{ $myAppliedPost->user->name }}</a></h3>
                </div>
            @endforeach
        </div>
    @endif

    <h2>List</h2>
    @if(!isset($userPosts[0]))
        <h3>No post</h3>
    @endif
    @foreach ($userPosts as $userPost)
    <div class='container'>
        <div class='post'>
            <div class='border'>
                <h3>
                    <a href="{{url('posts', $userPost->id)}}">
                        {{ $userPost->title }}
                    </a>
                </h3>
                <p>{{ $userPost->area->prefecture }}</p>
            </div>
        </div>
    </div>
    @endforeach
@endsection