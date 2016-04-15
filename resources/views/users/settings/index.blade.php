@extends('layouts.index')

@section('css')
    
@stop

@section('content')
    @include('users.layouts.menu')
    @include('alerts.messages')
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
    
@stop