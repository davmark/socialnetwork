@extends('layouts.index')

@section('css')

@stop

@section('content')
    @include('users.layouts.menu')
    @include('alerts.messages')
    <div>
        <address>
            <strong>{{$user->first_name}} {{$user->last_name}} (username - {{$user->username}})</strong><br>
            <p>Country - {{($user->country)?$user->country->name:'Country is empty' }}</p>
            <a href="mailto:#">{{$user->email}}</a>
        </address>
    </div>
@stop

@section('js')

@stop