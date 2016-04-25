@extends('layouts.index')

@section('css')
    {!! Html::style('main/cropper/css/cropper.min.css') !!}
    {!! Html::style('main/cropper/css/main.css') !!}
@stop

@section('content')
    @include('companies.layouts.menu')
    @include('alerts.messages')
    <div>
        <h2>Company Info</h2>
        @include('companies/settings/forms/info')
    </div>
    <div>
        <h2>Change Password</h2>
        @include('companies/settings/forms/password')
    </div>
@stop

@section('js')
    {!! Html::script('main/cropper/js/cropper.min.js') !!}
    {!! Html::script('main/cropper/js/main.js') !!}
    {!! Html::script('companies/js/settings/main.js') !!}
@stop