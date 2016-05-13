@extends('layouts/index')

@section('css')

@stop

@section('content')
    @include('users/layouts/menu')
    @include('alerts/messages')
    <div class="container">
        <div class="col-md-12">
            <div class="col-md-6">
                @include('users/layouts/timelinemenu')
            </div>
            <div class="col-md-6">
                <h3>Create status</h3>
                @include('users/statuses/forms/create')
            </div>
        </div>
        
        <div class="col-md-12">
            <h3>My Statuses</h3>
            @foreach( $statuses as $status )
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-6">
                        {{$status->text}}
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-6">
                            @include('users/statuses/forms/reply',['status'=>$status,'reply'=>NULL])
                        </div>
                        <div class="col-md-6">
                            {!! Form::open(['url'=>url('user/status/delete/'.$status->id), 'method'=>'delete']) !!}
                                {!! Form::button('Delete',['type'=>'submit']) !!}
                            {!! Form::close() !!}
                            <a href="{{url('user/status/update/'.$status->id)}}">Update</a>
                        </div>
                    </div>
                </div>
                @foreach((object)$status->getRepliesTree($status->replies) as $reply)
                <div class="col-md-10 col-md-offset-2">
                    <div class="col-md-6">
                        {!! $reply['text'] !!}
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-6">
                            @include('users/statuses/forms/reply',['status'=>$status,'reply'=>$reply])
                        </div>
                        <div class="col-md-6">
                            {!! Form::open(['url'=>url('user/status/delete/'.$status->id), 'method'=>'delete']) !!}
                                {!! Form::button('Delete',['type'=>'submit']) !!}
                            {!! Form::close() !!}
                            <a href="{{url('user/status/update/'.$status->id)}}">Update</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
@stop

@section('js')

@stop