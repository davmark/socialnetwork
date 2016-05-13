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
            <h3>My Status</h3>
            @if($lastStatus)
            <div>
                <div class="col-md-6">{{$lastStatus->text}}</div>
                <div class="col-md-6">
                    <p>Reply status</p>
                    @include('users/statuses/forms/reply',['status'=>$lastStatus,'reply'=>false])
                </div>
            </div>
            @else
                <p>Not yet status</p>
            @endif
        </div>
    </div>
@stop

@section('js')

@stop