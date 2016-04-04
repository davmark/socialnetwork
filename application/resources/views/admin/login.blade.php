@extends('_layouts.dashboard')
@section('content')
<body class="">

<div class="container">

    <form class="login-form" method="POST" action="{{url('admin/login')}}">
        {!! csrf_field() !!}
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            {{--<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>--}}
        </div>
    </form>
</div>
</body>

@stop