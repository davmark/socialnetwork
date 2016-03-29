@extends('app')

@section('content')
    <h1>About</h1>

    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>


    <h3>{{$first}}</h3>
    <h4>{!! $last !!}</h4>
@stop