@extends('layouts.index')

@section('content')
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#userRegistrationTab">User registration</a></li>
    <li><a data-toggle="tab" href="#companyRegistrationTab">Company registration</a></li>
    <li><a data-toggle="tab" href="#festivalRegistrationTab">Festival registration</a></li>
</ul>

<div class="tab-content">
    <div id="userRegistrationTab" class="tab-pane fade in active">
        <h3>User</h3>
        @include('auth.forms.userRegisterForm')
    </div>
    <div id="companyRegistrationTab" class="tab-pane fade">
        <h3>Company</h3>
        @include('auth.forms.companyRegisterForm')
    </div>
    <div id="festivalRegistrationTab" class="tab-pane fade">
        <h3>Festival</h3>
        @include('auth.forms.festivalRegisterForm')
    </div>
</div>
@stop
@section('js')
    {!! Html::script('auth/js/register.js') !!}
@stop