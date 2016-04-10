@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            @include('alerts.messages')
            {!! Form::open(['url' => 'auth/login', 'method' => 'POST']) !!}
                <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                    <label for="email" class="control-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="form-group{{$errors->has('password') ? ' has-error' : ''}}">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="form-group{{$errors->has('role') ? ' has-error' : ''}}">
                    {!! Form::select('role', array('user' => 'User','company' => 'Company','festival'=>'Festival'),NULL,['class'=>'form-control']) !!}
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <div class="form-group">
                    {!! Form::submit('Sign in',["class" => "btn btn-default"]) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop