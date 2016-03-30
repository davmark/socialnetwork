<div class="media">
    <a class="pull-left" href="{{url('user/profile/index', ['username' => $reply['user']->username])}}">
        <img class="media-object" alt="{{$reply['user']->username}}"
             src="@if($reply['user']->img) {{url()}}/users/imgs/thumbs/{{$reply['user']->img}} @else {{url()}}/users/defaultAvatar.png @endif">
    </a>
    <div class="media-body">
        <h5 class="media-body">
            <a href="{{url('user/profile/index', ['username' => $reply['user']->username])}}">
                {{$reply['user']->username}}
            </a>
        </h5>
        <p>{{$reply['body']}}</p>
        <ul class="list-inline">
            <li>{{$reply['created_at']}}</li>
            @if($reply['user']->id !== $user->id)
                <li><a href="{{url('user/status/like', ['statusId' => $reply['id']])}}">Like</a></li>
            @endif
            <li>{{$reply['likes']->count()}} {{str_plural('like', $reply['likes']->count())}}</li>
        </ul>
    </div>
</div>