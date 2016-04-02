@extends('templates.default')

@section('css')
    {!! Html::style('users/css/timeline.css') !!}
@stop

@section('content')
    <div class="row">
        <div class="col-lg-6">
                @include('timeline.partials.forms.user_status_form')
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            @if(!count($statuses))
                <p>There is nothing in your timeline, yet.</p>
            @else
                @foreach($statuses as $status)
                        @include('timeline.partials.status_item')
                @endforeach
            @endif
        </div>
    </div>
@stop
@section('js')
    {!! Html::script('users/js/timeline.js') !!}
@stop