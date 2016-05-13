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
            <h3>Update status</h3>
            @include('users/statuses/forms/update')
        </div>
    </div>
        
@stop

@section('js')
    
@stop