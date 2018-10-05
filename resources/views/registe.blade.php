@extends('layouts/app')

@section('title', 'Welcome')

@section('content')
<section class="realtime-feeling">
  <div class="container">
    <div class="row">

        <div class="col-sm">
          <div class="col-text">
            <img src="image/code.png" alt="">
            <p>Android扫码下载</p>
          </div>
        </div>
        <div class="col-sm">

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link" href="/login">登录</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" id="registe-tab" data-toggle="tab" href="#registe" role="tab" aria-controls="registe" aria-selected="false">注册</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="registe" role="tabpanel" aria-labelledby="registe-tab">
    <form id="reg_form" method="post" action="/user/registe">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <input type="hidden" id="imgcode_id" name="imgcode_id" value="0"/>
      <div class="form-group row">
        <label for="mobile" class="col-sm-3 col-form-label">手机号</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="mobile_reg" name="mobile" value="" placeholder="请输入11位数字手机号">
        </div>
      </div>
      <div class="form-group row">
        <label for="qrcode" class="col-sm-3 col-form-label">图形码</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="imgcode" name="qrcode" value="" placeholder="请输入图形码">
        </div>
        <div class="col-sm-4">
          <img id="imgcode_url" src="/image/imgcode_bg.jpg">
        </div>
      </div>
      <div class="form-group row">
        <label for="cfm_qrcode" class="col-sm-3 col-form-label">验证码</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="qrcode" name="qrcode" value="" placeholder="请输入验证码">
        </div>
        <div class="col-sm-4">
          <a id="btn_qrcode" href="javascript: void(0);" class="btn btn-success">获取验证码</a>
        </div>
      </div>
      <div class="form-group row">
        <label for="passwd" class="col-sm-3 col-form-label">密码</label>
        <div class="col-sm-9">
          <input type="password" class="form-control" id="passwd_reg" name="passwd" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <a href="/login">已有帐号</a>
      </div>
      <button type="button" class="btn btn-primary">注册</button>
    </form>
  </div>
</div>

        </div>
        <div class="col-sm">&nbsp;</div>
    </div>
</div>

    <script src="/js/registe.js"></script>

@stop
