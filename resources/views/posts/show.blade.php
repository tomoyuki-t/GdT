@extends('layout')


@section('content')
    <h1><a href="{{ url('users', $post->user_id) }}">{{ $post->user->name }}</a></h1>
    <div class='show-container'>
        <h2>{{ $post->title }}</h2>
        <h3>
            {{ $post->area->prefecture}}<br>
        </h3>
        <h3>
            {{ $post->body }}
        </h3>
    </div>
    @if(($appliedIf == true) || ($post->user_id == Auth::id()))
        <div class='applied'>
            <h3>Applied</h3>
        </div>
    @else
        {!! Form::open(['route' => 'applicants.store']) !!}
            {!! Form::hidden('post_id', $post->id) !!}
            {!! Form::hidden('user_id', Auth::id()) !!}
            <div class="create-btn">
                {!! Form::submit('Apply', ['class' => 'btn form-control']) !!}
            </div>
        {!! Form::close() !!}
    @endif
@endsection