<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Social Network</title>
        {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
        {!! Html::style('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css') !!}
        @yield('css')
    </head>
    <body>
        <div class="container">
            <div class="col-md-12 pull-right">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/')}}">Home</a></li>
                    @if(\Auth::guard('user')->check() or \Auth::guard('company')->check() or \Auth::guard('festival')->check())
                    <li><a href="{{url('auth/logout')}}">Logout</a></li>
                    @endif
                    <li><a href="{{url('auth/login')}}">Login</a></li>
                    
                    <li><a href="{{url('auth/register')}}">Registration</a></li>
                </ul>
            </div>
            @yield('content')
        </div>
        {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js') !!}
        {!! Html::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') !!}
        {!! Html::script('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js') !!}
        @yield('js')
    </body>
</html>