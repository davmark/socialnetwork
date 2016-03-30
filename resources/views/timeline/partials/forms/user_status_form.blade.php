{!! Form::open(array('url' => 'user/status/post','method'=>'POST', 'files'=>true)) !!}
    <div class="form-group{{$errors->has('status') ? 'has-error' : ''}}">
                    <textarea placeholder="What's up {{ $user->first_name }}" name="status"
                              class="form-control" rows="2"></textarea>
        @if($errors->has('status'))
            <span class="help-block">{{$errors->first('status')}}</span>
        @endif
    </div>
    <button type="submit" class="btn btn-default">Update Status</button>
{!! Form::close() !!}