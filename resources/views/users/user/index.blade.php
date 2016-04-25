@extends('layouts.index')

@section('css')

@stop

@section('content')
    @include('users.layouts.menu')
    @include('alerts.messages')
    <div>
        <address>
            <p>
                <img src="@if($user->avatar) {{url('')}}/users/imgs/{{$user->avatar}} @else {{url('')}}/main/imgs/user-default-avatar.png @endif" class="img-thumbnail img-responsive avatar__default" />
            </p>
            <strong>{{$user->first_name}} {{$user->last_name}} (username - {{$user->username}})</strong><br>
            <p>Country - {{($user->country)?$user->country->name:'Country is empty' }}</p>
            <a href="mailto:#">{{$user->email}}</a>
        </address>
    </div>
@stop

@section('js')

@stop