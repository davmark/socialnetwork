<div class="row">
    <div class="col-lg-6">
        {!! Form::open(['url'=>'auth/register', 'method' =>'POST','class'=>'form-vertical']) !!}
            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                {!! Form::label('name', 'Name', ['class'=>'control-label']) !!}
                {!! Form::text('name', NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                {!! Form::label('email', 'Email', ['class'=>'control-label']) !!}
                {!! Form::text('email', NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                {!! Form::label('country_id', 'Country', ['class'=>'control-label']) !!}
                {!! Form::select('country_id', $countries, NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                {!! Form::label('start_time', 'Start date', ['class'=>'control-label']) !!}
                {!! Form::text('start_time', NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                {!! Form::label('end_time', 'End date', ['class'=>'control-label']) !!}
                {!! Form::text('end_time', NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group {{$errors->has('password') ? ' has-error' : ''}}">
                {!! Form::label('password', 'Choose a password', ['class'=>'control-label']) !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group {{$errors->has('password') ? ' has-error' : ''}}">
                {!! Form::label('password_confirmation', 'Confirm password', ['class'=>'control-label']) !!}
                {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
            </div>
        {!! Form::hidden('role', 'festival') !!}
            <div class="form-group">
                {!! Form::submit('Sign up',['class'=>'btn btn-default']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>