<div class="col-md-12 pull-right">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/')}}">Site</a></li>
        <li><a href="{{url('festival')}}">My Page</a></li>
        <li><a href="{{url('festival/settings')}}">Settings</a></li>
        @if(\Auth::guard('festival')->check())
        <li><a href="{{url('auth/logout/festival')}}">Logout</a></li>
        @endif
    </ul>
</div>