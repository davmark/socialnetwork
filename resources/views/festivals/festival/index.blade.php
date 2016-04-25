@extends('layouts.index')

@section('css')
    
@stop

@section('content')
    @include('festivals.layouts.menu')
    @include('alerts.messages')
    <div>
        <div>
            <img src="@if($user->avatar) {{url('')}}/festivals/imgs/{{$user->avatar}} @else {{url('')}}/main/imgs/festival-default-avatar.png @endif" class="img-thumbnail img-responsive avatar__default" />
        </div>
      <address>
        <strong>{{$user->username}}, (username  -  {{$user->username}})</strong><br>
        <p>Country - {{$user->country->name}}</p>
        <a href="mailto:#">{{$user->email}}</a>
      </address>
    </div>
@stop

@section('js')
    
@stop