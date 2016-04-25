@extends('layouts/index')

@section('css')

@stop

@section('content')
    @include('users/layouts/menu')
    @include('alerts/messages')
    <div class="container">
        <div class="col-md-6">
            @include('users/layouts/timelinemenu')
        </div>
        <div class="col-md-6">
            <h3>Create status</h3>
            @include('users/timelines/forms/status')
        </div>
        
        <div class="">
            <h3>My Status</h3>
            @if($lastStatus)
                <p>{{$lastStatus->text}}</p>
            @else
                <p>Not yet status</p>
            @endif
        </div>
    </div>
@stop

@section('js')
    
@stop