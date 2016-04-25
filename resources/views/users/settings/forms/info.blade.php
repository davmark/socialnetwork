<div class="form-group">
    @include('layouts/cropper/cropper',['action'=>url('user/settings/crop-avatar'),'avatar'=>($user->avatar)? url('').'/users/imgs/'.$user->avatar : url('').'/main/imgs/user-default-avatar.png'])
</div>
{!! Form::model($user,['url'=>'user/settings/update-info','method'=>'POST','files'=>true]) !!}

<!--    <div class="form-group">
        <div>
            <img src="@if($user->avatar) {{url('')}}/users/imgs/{{$user->avatar}} @else {{url('')}}/main/imgs/user-default-avatar.png @endif" class="img-thumbnail img-responsive avatar__default" />
        </div>

        <div>
            {!! Form::label('file', 'Select file', ['class'=>'control-label']) !!}
            {!! Form::file('file', ['class'=>'form-control avatar__file__input']) !!}
        </div>
    </div>-->

    <div class="form-group{{$errors->has('first_name') ? ' has-error' : ''}}">
        {!! Form::label('first_name', 'Firts Name', ['class'=>'control-label']) !!}
        {!! Form::text('first_name', NULL, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group{{$errors->has('last_name') ? ' has-error' : ''}}">
        {!! Form::label('last_name', 'Last Name', ['class'=>'control-label']) !!}
        {!! Form::text('last_name', NULL, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
        {!! Form::label('email', 'Email', ['class'=>'control-label']) !!}
        {!! Form::text('email', NULL, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group{{$errors->has('occupation') ? ' has-error' : ''}}">
        {!! Form::label('occupation', 'Occupation', ['class'=>'control-label']) !!}
        {!! Form::select('occupation', [1,2,3], NULL, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group{{$errors->has('country_id') ? ' has-error' : ''}}">
        {!! Form::label('country_id', 'Change country', ['class'=>'control-label']) !!}
        {!! Form::select('country_id', \App\Helpers\ActionClass::getCountries(), NULL, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update',['class'=>'form-control']) !!}
    </div>

{!! Form::close() !!}