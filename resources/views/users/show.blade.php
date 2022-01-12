@extends('layout')

@section('content')
    @if($user->id == Auth::id())
        <h1>My Page</h1>
    @else
        <h1>{{ $user->name }}</h1>
    @endif

    @if($user->id == Auth::id())
        <h2>Applied</h2>
        <div class='apply-container'>
            @foreach($appliedUsers as $appliedUser)
                <div class='applied-user'>
                    <h3><a href="{{ url('users', $appliedUser->id) }}">{{ $appliedUser->name }}</a></h3>
                </div>
            @endforeach
        </div>
    @endif

    <h2>List</h2>
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