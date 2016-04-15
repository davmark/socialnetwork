<div class="col-md-12 pull-right">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('home/about')}}">About</a></li>
        <li><a href="{{url('home/contact')}}">Contuct us</a></li>
        @if(\Auth::guard('user')->check() or \Auth::guard('company')->check() or \Auth::guard('festival')->check())
        <li><a href="{{url('auth/logout')}}">Logout</a></li>
        @endif
        <li><a href="{{url('auth/login')}}">Login</a></li>
        <li><a href="{{url('auth/register')}}">Registration</a></li>
    </ul>
</div>