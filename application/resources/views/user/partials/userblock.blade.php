<div class="media">
    <a class="pull-left" href="{{url('user/profile/index', ['username' => $user->username])}}">
        <img class="media-object" alt="{{$user->getNameOrUsername()}}" src="@if($user->img) {{url()}}/users/imgs/thumbs/{{$user->img}} @else {{url()}}/users/defaultAvatar.png @endif">

    </a>
        <div class="media-body">
            <h4 class="media-heading"><a href="{{url('user/profile/index', ['username' => $user->username])}}">
                    {{$user->getNameOrUsername()}}</a></h4>
            @if ($user->location)
                <p>{{$user->location}}</p>
            @endif
        </div>

</div>