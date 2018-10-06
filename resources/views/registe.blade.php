@extends('layouts/app')

@section('title', 'Welcome')
@section('default_active', 'active')

@section('content')
<style>
.qrcode_p {
  font-size: 16px;
  color: #FFFFFF;
  margin-top: 10px;
  margin-left: 20px;
}
.nav-tab {
  width: 100%;
  height: 40px;
  margin: 5px;
}
.nav-link {
  width: 50%;
  height: 40px;
  float: left;
  text-align: center;
  font-size: 20px;
  color: #333;
  background: #6dc2f5;
}
.nav-link.active {
  color: #333;
  background: #d7ecf9;
}
.tab-pane {
  width: 100%;
  height: 300px;
  background: #d7ecf9;
  padding: 5px;
  margin: 5px;
}
.form-group {
  margin: 10px;
}
.form-control {
  width: 100%;
  height: 40px;
}
button.login-btn {
  font-size: 14px;
  height: 30px;
  width: 100%;
  background: #2aa8f2;
  border: #2aa8f2;
  color: #fff !important;
}
#btn_qrcode {
  height: 40px;
  width: 100%;
  background: #2aa8f2;
  border: #2aa8f2;
  color: #fff !important;
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
  <a class="nav-link" href="/login">登录</a>
  <a class="nav-link active" href="javascript: void(0);">注册</a>
</ul>
<div class="tab-content" style="margin-top: -5px; margin-bottom: 50px;">
  <div class="tab-pane fade show active">
    <form id="reg_form" method="post" action="/user/registe">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <input type="hidden" id="imgcode_id" name="imgcode_id" value="0"/>
      <div class="form-group row">
        <label for="mobile" class="col-form-label" style="width: 45px;">手机号</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="mobile_reg" name="mobile" value="" placeholder="请输入11位数字手机号">
        </div>
      </div>
      <div class="form-group row">
        <label for="qrcode" class="col-form-label" style="width: 45px;">图形码</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="imgcode" name="qrcode" value="" placeholder="请输入图形码">
        </div>
        <div class="col-sm-4">
          <img id="imgcode_url" src="/image/imgcode_bg.jpg" style="margin-left: -16px;">
        </div>
      </div>
      <div class="form-group row">
        <label for="cfm_qrcode" class="col-form-label" style="width: 45px;">验证码</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="qrcode" name="qrcode" value="" placeholder="请输入验证码">
        </div>
        <div class="col-sm-5">
          <button id="btn_qrcode">获取验证码</button>
        </div>
      </div>
      <div class="form-group row">
        <label for="passwd" class="col-form-label" style="width: 45px;">密码</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="passwd_reg" name="passwd" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <a href="/login">已有帐号</a>
      </div>
      <div class="form-group row">
        <button id="btn_reg" type="button" class="login-btn">注册</button>
      </div>
    </form>
  </div>
</div>

        </div>
        <div class="col-sm">&nbsp;</div>
    </div>
</div>

    <script src="/js/registe.js"></script>

@stop
