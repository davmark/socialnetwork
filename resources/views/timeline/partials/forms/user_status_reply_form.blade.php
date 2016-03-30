{!! Form::open(array('url' => 'user/status/reply/'.$status['id'],'method'=>'POST', 'files'=>true)) !!}
    <div class="form-group{{$errors->has("reply") ? ' has-error': ''}}">
        {!! Form::textarea('reply', NULL, array('class' => 'form-control', 'placeholder' => 'Reply to This status', 'rows' => 2)) !!}
        @if($errors->has("reply"))
            <span class="help-block">{{$errors->first("reply")}}</span>
        @endif
    </div>
    <input type="submit" value="Reply" class="btn btn-default btn-sm">
{!! Form::close() !!}