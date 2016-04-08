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
                {!! Form::label('country', 'Country', ['class'=>'control-label']) !!}
                {!! Form::select('country', [1,2,3], NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                {!! Form::label('start_date', 'Start date', ['class'=>'control-label']) !!}
                {!! Form::text('start_date', NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                {!! Form::label('end_date', 'End date', ['class'=>'control-label']) !!}
                {!! Form::text('end_date', NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group {{$errors->has('password') ? ' has-error' : ''}}">
                {!! Form::label('password', 'Choose a password', ['class'=>'control-label']) !!}
                {!! Form::text('password', NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group {{$errors->has('password') ? ' has-error' : ''}}">
                {!! Form::label('password_confirmation', 'Confirm password', ['class'=>'control-label']) !!}
                {!! Form::text('password_confirmation', NULL, ['class'=>'form-control']) !!}
            </div>
        {!! Form::hidden('role', 'festival') !!}
            <div class="form-group">
                {!! Form::submit('Sign up',['class'=>'btn btn-default']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>