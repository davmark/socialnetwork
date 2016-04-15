<div class="col-md-12 pull-right">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/')}}">Site</a></li>
        <li><a href="{{url('company')}}">My Page</a></li>
        <li><a href="{{url('company/settings')}}">Settings</a></li>
        @if(\Auth::guard('company')->check())
        <li><a href="{{url('auth/logout/company')}}">Logout</a></li>
        @endif
    </ul>
</div>