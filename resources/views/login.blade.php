@extends('layouts/app')

@section('title', 'Welcome')

@section('content')
<style>
.qrcode_p {
  font-size: 16px;
  color: #FFFFFF;
  margin-top: 10px;
  margin-left: 20px;
}
button.login-btn {
  font-size: 14px;
  height: 30px;
  width: 200px;
  background: #2aa8f2;
  border: #2aa8f2;
  color: #fff !important;
}
.nav-tab {
  width: 300px;
  height: 40px;
  margin: 5px;
}
.nav-link {
  width: 150px;
  height: 40px;
  float: left;
  text-align: center;
  font-size: 20px;
  background: #d7ecf9;
}
.nav-link.active {
  background: #2aa8f2;
}
.tab-pane {
  width: 300px;
  height: 200px;
  background: #d7ecf9;
  padding: 5px;
  margin: 5px;
}
</style>

<section class="realtime-feeling">
  <div class="container">
    <div class="row">

        <div class="col-sm">
          <div class="col-text">
            <img src="image/code.png" alt="">
            <p class="qrcode_p">Android扫码下载</p>
          </div>
        </div>
        <div class="col-sm">

<ul class="nav-tab">
  <a class="nav-link active" href="javascript: void(0);">登录</a>
  <a class="nav-link" href="/registe">注册</a>
</ul>
<div class="tab-content">
  <div class="tab-pane fade show active">
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
      <button class="login-btn">登录</button>
    </form>
  </div>
</div>

        </div>
        <div class="col-sm">&nbsp;</div>
    </div>
</div>

<script src="/js/user.js"></script>

@stop
