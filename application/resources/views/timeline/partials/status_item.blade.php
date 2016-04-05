<div class="media post-cont">
    <a class="pull-left" href="{{url('user/profile/index', ['username' => $status['user']->username])}}">
        <img class="media-object" alt="{{$status['user']->username}}"
             src="@if($user->img) {{url()}}/files/users/imgs/thumbs/{{$user->img}} @else {{url()}}/users/defaultAvatar.png @endif">
    </a>

    <div class="media-body">
        <div class="syatus-cont">
            <h4 class="media-heading"><a href="{{url('user/profile/index', ['username' => $status['user']->username])}}">{{$status['user']->username}}</a></h4>
            <p>{{$status['body']}}
                @if($status['unique_file_name'])
                <a href="{{url('user/status/download-file/'.$status['unique_file_name'].'/'.$status['original_file_name'])}}" class="file-icon">
                    <span class='glyphicon glyphicon-paperclip'></span>
                </a>
                @endif
            </p>
            <ul class="list-inline">
                <li>{{$status['created_at']}}</li>
                @if($status['user']->id !== $user->id)
                    <li><a href="{{url('user/status/like', ['statusId' => $status['id']])}}">Like</a></li>
                @endif
                <li>{{$status['likes']->count()}} {{str_plural('like', $status['likes']->count())}}</li>
            </ul>
        </div>
            @if($user->id == $status['user']->id)
            <div class="pull-right first-messege">
                {!!Form::open(array('url'=>'user/status/delete/'.$status['id'],'method'=>'DELETE','class'=>'button-edit-del-cont'))!!}
                    {!!Form::submit('Delete')!!}
                {!!Form::close()!!}
                <a href='{{url('user/status/update/'.$status['id'])}}'><button class="button-edit-del-cont">Edit</button></a>
            </div>
            @endif
        @if(isset($status['replies']))
            @foreach($status['replies'] as $reply )
                @include('timeline.partials.reply_item')
            @endforeach
        @endif
        @include('timeline.partials.forms.user_status_reply_form')
    </div>
</div>