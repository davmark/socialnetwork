{!! Form::open([ 'url'=>url('user/status/create-reply'), 'method'=>'POST', ]) !!}
    {!! Form::hidden('status_id',$status->id, []) !!}
    {!! Form::hidden('parent_id',($reply)?$reply['id']:0, []) !!}

    <div class="form-group">
        {!! Form::textarea('text',null, [ 'class' => 'form-control', 'cols'=>'2', 'rows' => '3' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::button('Reply', [ 'type' => 'submit', 'class' => 'btn btn-info' ]) !!}
    </div>
{!! Form::close() !!}