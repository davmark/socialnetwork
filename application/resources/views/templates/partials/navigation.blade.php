<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header"></div>
            <a class="navbar-brand" href="{{url('home')}}">Social Network</a>
    </div>
    <div class="collapse navbar-collapse">
        @if(Auth::check())
        <ul class="nav navbar-nav">
            <li><a href="{{url('user/timeline')}}">Timline</a></li>
            <li><a href="{{url('user/friend/index')}}">Friends</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search" action="{{url('user/search/results')}}">
            <div class="form-group">
                <input type="text" name="query" class="form-control" placeholder="Find people">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
        </form>
        @endif
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li><a href="{{url('user/profile/index', ['username' => Auth::user()->username])}}">{{Auth::user()->getNameOrUsername()}}</a></li>
                <li><a href="{{url('user/profile/edit')}}">Update profile</a></li>
                <li><a href="{{url('auth/signout')}}">Sign out</a></li>
            @else
                <li><a href="{{url('auth/signup')}}">Sign up</a></li>
                <li><a href="{{url('auth/signin')}}">Sign in</a></li>
            @endif
        </ul>
    </div>

</nav>