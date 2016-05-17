<?php
    $name = 'Guest';
    if(isset($_GET['name']))
        $name = $_GET['name'];
?>
@extends('layouts.index')

@section('css')
    
@stop

@section('content')
    @include('users.layouts.menu')

    <div class="col-md-4">
        <form class="chat__form" data-user='{{$user->username}}-{{$user->id}}'>
            <div>
                <select class="users__list">
                    <option value="0">Select a friend</option>
                    @foreach($chatUsers as $user)
                        <option value="{{$user['room']}}">{{$user['full_name']}}</option>
                    @endforeach
                </select>
             </div>
            <div>
                <textarea id="m"></textarea>
            </div>
            <input type="hidden"/>
            <button>Send</button>
        </form>
    </div>
    <div class="col-md-8">
        <ul id="messages"></ul>
    </div>

@stop

@section('js')
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.6/socket.io.js') !!}
    {!! Html::script('users/js/chat/main.js') !!}
@stop