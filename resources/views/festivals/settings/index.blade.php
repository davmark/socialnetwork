@extends('layouts.index')

@section('css')
    
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
    
@stop