{!! Form::model($user,['url'=>'user/settings/update-info','method'=>'POST']) !!}
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
            {!! Form::label('country_id', 'Change country', ['class'=>'control-label']) !!}
            {!! Form::select('country_id', \App\Helpers\ActionClass::getCountries(), NULL, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update',['class'=>'form-control']) !!}
        </div>
{!! Form::close() !!}