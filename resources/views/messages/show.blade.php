@extends('layout')

@section('content')
    <h1><a href="{{ url('users', $user->id) }}">{{ $user->name }}</a></h1>
    <div class='dm-container'>
        @if(!isset($messages[0]))
            <h3>No message</h3>
        @endif
        @foreach($messages as $message)
            @if($message->sender_id == Auth::id())
                <div class='right-message'>
                    <p>{{ $message->body }}</p>
                </div>
            @else
                <div class='left-message'>
                    <p>{{ $message->body }}</p>
                </div>
            @endif
        @endforeach
        
    </div>
    <div class='create-message'>
            {!! Form::open(['route' => 'messages.store']) !!}
                {!! Form::hidden('sender_id', Auth::id()) !!}
                {!! Form::hidden('receiver_id', $id) !!}
                {!! Form::text('body', null, ['class' => 'input-message']) !!}
                {!! Form::submit('Send', ['class' => 'btn form-control send-btn']) !!}
            {!! Form::close() !!}
    </div>
@endsection