@extends('layout')

@section('content')
    <h1>Create</h1>
    
    {!! Form::open(['route' => 'posts.store']) !!}
        <div class='create-container'>
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('area_id', 'Area:') !!}
                {!! Form::select('area_id', \App\Models\Area::select('id', 'prefecture')->get()->pluck('prefecture','id')->prepend( "選択してください", ""), null, ['class' => 'form-control', 'multiple']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Message:') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div>
    
        </div>
        <div class="create-btn">
            {!! Form::submit('Post', ['class' => 'btn form-control']) !!}
        </div>
    {!! Form::close() !!}
    
@endsection