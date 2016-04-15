@extends('layouts.index')

@section('css')

@stop

@section('content')
    @include('users.layouts.menu')
    @include('alerts.messages')
    
    <div>
        <h2>Friends list</h2>

        <table class="table">
            <thead>
                <tr>
                    <td>First name</td>
                    <td>Last name</td>
                    <td>Email</td>
                    <td>Unfriend</td>
                </tr>
            </thead>
            <tbody>
                @foreach($firendsList['friends'] as $friend)
                <tr class="success">
                    @include('users/friends/items/friend')
                    <td><button>Unfriend</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><hr/>

    <div>
        <h2>Request sent from me</h2>
        <table class="table">
            <thead>
                <tr>
                    <td>First name</td>
                    <td>Last name</td>
                    <td>Email</td>
                </tr>
            </thead>
            <tbody>
                @foreach($firendsList['from'] as $friend)
                <tr class="warning">
                    @include('users/friends/items/friend')
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><hr/>

    <div>
        <h2>Request sent to me</h2>

        <table class="table">
            <thead>
                <tr>
                    <td>First name</td>
                    <td>Last name</td>
                    <td>Email</td>
                    <td>Request to me</td>
                </tr>
            </thead>
            <tbody>
                @foreach($firendsList['to'] as $friend)
                <tr class="info">
                    @include('users/friends/items/friend')
                    <td><button>Cancel</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><hr/>
@stop

@section('js')

@stop