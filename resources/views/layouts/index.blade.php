<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Social Network')</title>
        {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
        {!! Html::style('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css') !!}
        @yield('css')
    </head>
    <body>
        <div class="container">
            @yield('content')
            <div id="ajax__request__data"
                 data-url="{{url('/')}}"
                 data-token="{{csrf_token()}}"
                 ></div>
        </div>
        {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js') !!}
        {!! Html::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') !!}
        {!! Html::script('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js') !!}
        {!! Html::script('https://cdn.socket.io/socket.io-1.4.5.js') !!}
        {!! Html::script('main/js/common.js') !!}
        @yield('js')
    </body>
</html>