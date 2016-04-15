{!! Form::model($user,['url'=>'festival/settings/update-info','method'=>'POST']) !!}
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
        {!! Form::select('country_id', \App\Helpers\ActionClass::getCountries(), NULL, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
        {!! Form::label('start_time', 'Start date', ['class'=>'control-label']) !!}
        {!! Form::text('start_time', NULL, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
        {!! Form::label('end_time', 'End date', ['class'=>'control-label']) !!}
        {!! Form::text('end_time', NULL, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update',['class'=>'form-control']) !!}
    </div>
{!! Form::close() !!}