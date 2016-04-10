<div class="row">
    <div class="col-lg-6">
        {!! Form::open(['url'=>'auth/register', 'method' =>'POST','class'=>'form-vertical']) !!}
            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                {!! Form::label('first_name', 'Firts Name', ['class'=>'control-label']) !!}
                {!! Form::text('first_name', NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                {!! Form::label('last_name', 'Last Name', ['class'=>'control-label']) !!}
                {!! Form::text('last_name', NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                {!! Form::label('email', 'Email', ['class'=>'control-label']) !!}
                {!! Form::text('email', NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                {!! Form::label('occupation', 'Occupation', ['class'=>'control-label']) !!}
                {!! Form::select('occupation', [1,2,3], NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                {!! Form::label('country', 'Country', ['class'=>'control-label']) !!}
                {!! Form::select('country', [1,2,3], NULL, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group {{$errors->has('password') ? ' has-error' : ''}}">
                {!! Form::label('password', 'Choose a password', ['class'=>'control-label']) !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group {{$errors->has('password') ? ' has-error' : ''}}">
                {!! Form::label('password_confirmation', 'Confirm password', ['class'=>'control-label']) !!}
                {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
            </div>
            {!! Form::hidden('role', 'user') !!}
            <div class="form-group">
                {!! Form::submit('Sign up',['class'=>'btn btn-default']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>