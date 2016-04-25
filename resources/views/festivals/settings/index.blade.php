@extends('layouts.index')

@section('css')
    {!! Html::style('main/cropper/css/cropper.min.css') !!}
    {!! Html::style('main/cropper/css/main.css') !!}
@stop

@section('content')
    @include('festivals.layouts.menu')
    @include('alerts.messages')
    <div>
        <h2>Festival Info</h2>
        @include('festivals/settings/forms/info')
    </div>
    <div>
        <h2>Change Password</h2>
        @include('festivals/settings/forms/password')
    </div>
@stop

@section('js')
    {!! Html::script('main/cropper/js/cropper.min.js') !!}
    {!! Html::script('main/cropper/js/main.js') !!}
    {!! Html::script('festivals/js/settings/main.js') !!}
@stop