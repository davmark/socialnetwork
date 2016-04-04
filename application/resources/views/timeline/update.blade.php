@extends('templates.default')

@section('content')
<div class="edit-cont">
    {!! Form::model($model,array('method'=>'post','class'=>'edit-form','url'=>"user/status/update/$model->id")) !!}
    {!! Form::textarea('body',NULL,[]) !!}
    {!! Form::file('file',NULL,['class'=>"form-control"]) !!}
    {!! Form::submit('Submit') !!}
</div>
@stop