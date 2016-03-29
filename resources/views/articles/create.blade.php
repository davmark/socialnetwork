@extends('app')

@section('content')
    <h1>Write a New Article</h1>
    <hr/>

    {{--{!! Form::open() !!}--}}
        {{--{!! Form::label('name', 'Name:') !!}--}}
        {{--{!! Form::text('name') !!}--}}
    {{--{!! Form::close() !!}--}}

    {!! Form::open(['url' => 'articles']) !!}
    @include('articles.form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

    @include('errors.list')
    @include('alerts.messages')

@stop