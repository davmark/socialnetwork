@extends('layouts.index')

@section('css')
    
@stop

@section('content')
    @include('festivals.layouts.menu')
    @include('alerts.messages')
    <div>
      <address>
        <strong>{{$user->username}}, (username  -  {{$user->username}})</strong><br>
        <p>Country - {{$user->country->name}}</p>
        <a href="mailto:#">{{$user->email}}</a>
      </address>
    </div>
@stop

@section('js')
    
@stop