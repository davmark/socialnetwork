{!! Form::open([ 'url' => 'user/settings/change-password', 'method' => 'POST' ]) !!}
    <div class="form-group">
        {!! Form::label('password', 'New Password', ['class'=>'control-label']) !!}
        {!! Form::text('password', NULL, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Cahnge Password',['class'=>'form-control']) !!}
    </div>
{!! Form::close() !!}