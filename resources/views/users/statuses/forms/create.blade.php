{!! Form::open([ 'url'=>url('user/status/create'), 'method'=>'POST', ]) !!}
    <div class="form-group">
        {!! Form::textarea('text',null, [ 'class' => 'form-control', 'cols'=>'2', 'rows' => '3' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::button('Create', [ 'type' => 'submit', 'class' => 'btn btn-info' ]) !!}
    </div>
    
{!! Form::close() !!}