@extends('layouts/index')

@section('css')
    {!! Html::style('main/cropper/css/cropper.min.css') !!}
    {!! Html::style('main/cropper/css/main.css') !!}
@stop

@section('content')
    @include('users/layouts/menu')
    @include('alerts/messages')
    
    <div>
        <h2>User Info</h2>
        @include('users/settings/forms/info')
    </div>
    <div>
        <h2>Change Password</h2>
        @include('users/settings/forms/password')
    </div>
@stop

@section('js')
    {!! Html::script('main/cropper/js/cropper.min.js') !!}
    {!! Html::script('main/cropper/js/main.js') !!}
    {!! Html::script('users/js/settings/main.js') !!}
@stop