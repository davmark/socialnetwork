{!! Form::open([ 'url' => 'user/search/index', 'method' => 'POST' ]) !!}
    <div class="form-group">
        {!! Form::label('search_result', 'Enter user data', ['class'=>'control-label']) !!}
        {!! Form::text('search_result', NULL, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Search',['class'=>'form-control']) !!}
    </div>
{!! Form::close() !!}