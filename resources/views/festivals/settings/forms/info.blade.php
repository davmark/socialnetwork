<div class="form-group">
    @include('layouts/cropper/cropper',['action'=>url('festival/settings/crop-avatar'),'avatar'=>($user->avatar)? url('').'/festivals/imgs/'.$user->avatar : url('').'/main/imgs/festival-default-avatar.png'])
</div>


{!! Form::model($user,['url'=>'festival/settings/update-info','method'=>'POST','files'=>true]) !!}
<!--    <div class="form-group">
        <div>
            <img src="@if($user->avatar) {{url('')}}/festivals/imgs/{{$user->avatar}} @else {{url('')}}/main/imgs/festival-default-avatar.png @endif" class="img-thumbnail img-responsive avatar__default" />
        </div>

        <div>
            {!! Form::label('file', 'Select file', ['class'=>'control-label']) !!}
            {!! Form::file('file', ['class'=>'form-control logo__file__input']) !!}
        </div>
    </div>-->
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