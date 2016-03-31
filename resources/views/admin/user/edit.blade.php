@extends('admin.master')
@section('controller','User')
@section('action','Edit')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="" method="POST">
    @include('admin.blocks.errors')
    <input type="hidden" name="_token" value="{{ csrf_token() }}"  />
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="txtUser" value="{{$user->username}}" disabled />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" />
        </div>
        <div class="form-group">
            <label>RePassword</label>
            <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" value="{{$user->email}}" />
        </div>
        <div class="form-group">
            <label>User Level</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" @if ($user->level == 1) checked="checked" @endif type="radio">

                Admin
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="2" type="radio" @if ($user->level == 2) checked="checked" @endif>Member
            </label>
        </div>
        <button type="submit" class="btn btn-default">User Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection
               