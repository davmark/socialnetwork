<div class="col-md-12 pull-right">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/')}}">Site</a></li>
        <li><a href="{{url('user')}}">My page</a></li>
        <li><a href="{{url('user/timeline')}}">Timeline</a></li>
        <li><a href="{{url('user/settings')}}">Settings</a></li>
        <li><a href="{{url('user/search')}}">Search</a></li>
        <li><a href="{{url('user/friends')}}">Friends</a></li>
        <li><a href="{{url('user/chat')}}">Chat</a></li>
        @if(\Auth::guard('user')->check())
        <li><a href="{{url('auth/logout/user')}}">Logout</a></li>
        @endif
    </ul>
</div>