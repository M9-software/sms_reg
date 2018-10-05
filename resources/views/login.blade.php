@extends('layouts/app')

@section('title', 'Welcome')

@section('content')
<section class="realtime-feeling">
  <div class="container">
    <div class="row">

        <div class="col-sm">&nbsp;</div>
        <div class="col-sm">

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">登录</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/registe">注册</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
    <form id="login_form" method="post" action="/user/login">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
        <input type="text" class="form-control" id="mobile_login" name="mobile" placeholder="请输入手机号">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="passwd_login" name="passwd" placeholder="Password">
      </div>
      <div class="form-group">
        <a href="/forgot">忘记密码</a>
      </div>
      <button type="button" class="btn btn-primary">登录</button>
    </form>
  </div>
</div>

        </div>
        <div class="col-sm">&nbsp;</div>
    </div>
</div>

<script src="/js/user.js"></script>

@stop
