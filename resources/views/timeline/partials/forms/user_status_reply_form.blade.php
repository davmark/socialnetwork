{!! Form::open(array('url' => 'user/status/reply/'.$status['id'],'method'=>'POST', 'files'=>true)) !!}
    <div class="form-group{{$errors->has("reply") ? ' has-error': ''}}">
        {!! Form::textarea('reply', NULL, array('class' => 'form-control width-control', 'placeholder' => 'Reply to This status', 'rows' => 2)) !!}
        {!! Form::file('file',NULL,['class'=>"form-control"]) !!}
        <a href="#" class="file-icon"><span class='glyphicon glyphicon-paperclip'></span></a>
        <a href="#" class="remove-icon"><span class='glyphicon glyphicon-remove'></span></a>
        @if($errors->has("reply"))
            <span class="help-block">{{$errors->first("reply")}}</span>
        @endif
    </div>
    <input type="submit" value="Reply" class="btn btn-default btn-sm">
{!! Form::close() !!}