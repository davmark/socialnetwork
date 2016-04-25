@extends('layouts.index')

@section('css')
    
@stop

@section('content')
    @include('users.layouts.menu')
    @include('alerts.messages')
    <div>
        <h2>Search user by username or first name and last name</h2>
        @include('users/searches/forms/users')
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Friend request</td>
                </tr>
            </thead>
            <tbody>
                @foreach($results as $result)
                    @include('users/searches/items/user')
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('js')
    {!! Html::script('users/js/search/main.js') !!}
    {!! Html::script('users/js/friends/main.js') !!}
@stop