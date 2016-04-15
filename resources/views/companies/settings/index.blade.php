@extends('layouts.index')

@section('css')
    
@stop

@section('content')
    @include('companies.layouts.menu')
    @include('alerts.messages')
    <div>
        <h2>Company Info</h2>
        @include('companies/settings/forms/info')
    </div>
    <div>
        <h2>Change Password</h2>
        @include('companies/settings/forms/password')
    </div>
@stop

@section('js')
    
@stop