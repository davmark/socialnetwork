{!! Form::model($model,['url'=>url('user/status/update/'.$model->id),'method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::textarea('text',null, [ 'class' => 'form-control', 'cols'=>'2', 'rows' => '3' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::button('Update', [ 'type' => 'submit', 'class' => 'btn btn-info' ]) !!}
    </div>
{!! Form::close() !!}