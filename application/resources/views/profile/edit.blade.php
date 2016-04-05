@extends('templates.default')

@section('content')
    <h3>Update your profile</h3>

    <div class="row">
        <div class="col-lg-6">
            @include('profile.forms.updateform')
        </div>
        <div>
            <a class="pull-left" href="{{url('user/profile/index', ['username' => $user->username])}}">
                <img class="media-object" alt="Profile image"
                     width="150px"
                     src="@if($user->img) {{url()}}/users/imgs/thumbs/{{$user->img}} @else {{url()}}/users/defaultAvatar.png @endif"/>
            </a>
        </div>
    </div>
@stop
