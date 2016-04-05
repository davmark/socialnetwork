@extends('templates.default')
@section('content')
<div class="col-md-8">
    <h2>Create a new message</h2>
    {!! Form::open(['url' => 'user/messages/create', 'method'=>'POST', 'class'=>'user__chat__form']) !!}
    <div class="col-md-6">
        <!-- Subject Form Input -->
        <div class="form-group">
            {!! Form::label('user_id', 'Select User', ['class' => 'control-label']) !!}
            {!! Form::select('user_id', $firendsDropdownList, NULL, ['class' => 'form-control']) !!}
        </div>

        <!-- Message Form Input -->
        <div class="form-group">
            {!! Form::label('message', 'Message', ['class' => 'control-label']) !!}
            {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Submit Form Input -->
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>
<div class="col-md-4">
    <h2>Messages</h2>
    <div class="chat__message__block"></div>
</div>
@stop
@section('js')
    {!! Html::script('users/js/chat.js') !!}
@stop