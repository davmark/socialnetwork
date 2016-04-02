{!! Form::open(array('url' => 'user/status/post','method'=>'POST', 'files'=>true)) !!}
    <div class="form-group{{$errors->has('status') ? 'has-error' : ''}}">
        {!! Form::textarea('status',NULL,['placeholder'=>"What's up $user->username",'class'=>"form-control",'rows'=>"2"]) !!}
        {!! Form::file('file',NULL,['class'=>"form-control"]) !!}
        <a href="#" class="file-icon"><span class='glyphicon glyphicon-paperclip'></span></a>
        <a href="#" class="remove-icon"><span class='glyphicon glyphicon-remove'></span></a>
        @if($errors->has('status'))
            <span class="help-block">{{$errors->first('status')}}</span>
        @endif
    </div>
    {!! Form::submit('Update Status',['class' => "btn btn-default"]) !!}
{!! Form::close() !!}