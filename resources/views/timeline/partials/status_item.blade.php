<div class="media">
    <a class="pull-left" href="{{url('profile/index', ['username' => $status['user']->username])}}">
        <img class="media-object" alt="{{$status['user']->username}}"
             src="@if($user->img) {{url()}}/users/imgs/thumbs/{{$user->img}} @else {{url()}}/users/defaultAvatar.png @endif">
    </a>
    <div class="media-body">
        <h4 class="media-heading"><a href="{{url('profile/index', ['username' => $status['user']->username])}}">{{$status['user']->username}}</a></h4>
        <p>{{$status['body']}}</p>
        <ul class="list-inline">
            <li>{{$status['created_at']}}</li>
            @if($status['user']->id !== $user->id)
                <li><a href="{{url('status/like', ['statusId' => $status['id']])}}">Like</a></li>
            @endif
            <li>{{$status['likes']->count()}} {{str_plural('like', $status['likes']->count())}}</li>
        </ul>
        @if(isset($status['replies']))
        @foreach($status['replies'] as $reply )
            @include('timeline.partials.reply_item')
            @endforeach
        @endif
        @include('timeline.partials.forms.user_status_reply_form')
    </div>
</div>