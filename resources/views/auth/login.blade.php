@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            @include('alerts.messages')
            {!! Form::open(['url' => 'auth/login', 'method' => 'POST']) !!}
                <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="email" class="control-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="form-group{{$errors->has('password') ? 'has-error' : ''}}">
                    @if($errors->has('email'))
                        <span class="help-block">{{$errors->first('email')}}</span>
                    @endif
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                    @if($errors->has('password'))
                        <span class="help-block">{{$errors->first('password')}}</span>
                    @endif
                </div>
                {!! Form::select('role', array('user' => 'User','company' => 'Company','festival'=>'Festival'),NULL,['class'=>'form-control']) !!}
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