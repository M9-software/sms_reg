<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm">&nbsp;</div>
                <div class="col-sm">

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">登录</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="registe-tab" data-toggle="tab" href="#registe" role="tab" aria-controls="registe" aria-selected="false">注册</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
    <form id="login_form">
      <div class="form-group">
        <input type="text" class="form-control" id="mobile_login" name="mobile" placeholder="请输入手机号">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="passwd_login" name="passwd" placeholder="Password">
      </div>
      <div class="form-group">
        <a href="#">忘记密码</a>
      </div>
      <button type="button" class="btn btn-primary">登录</button>
    </form>
  </div>
  <div class="tab-pane fade" id="registe" role="tabpanel" aria-labelledby="registe-tab">
    <form id="reg_form">
      <div class="form-group row">
        <label for="mobile" class="col-sm-3 col-form-label">手机号</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="mobile_reg" name="mobile" value="" placeholder="请输入11位数字手机号">
        </div>
      </div>
      <div class="form-group row">
        <label for="qrcode" class="col-sm-3 col-form-label">图形码</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="qrcode" value="" placeholder="请输入图形码">
        </div>
        <div class="col-sm-4">
          <img src="">
        </div>
      </div>
      <div class="form-group row">
        <label for="cfm_qrcode" class="col-sm-3 col-form-label">验证码</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="cfm_qrcode" name="cfm_qrcode" value="" placeholder="">
        </div>
        <div class="col-sm-4">
          <a href="" class="btn btn-success">获取验证码</a>
        </div>
      </div>
      <div class="form-group row">
        <label for="passwd" class="col-sm-3 col-form-label">密码</label>
        <div class="col-sm-9">
          <input type="password" class="form-control" id="passwd_reg" name="passwd" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <a href="/">已有帐号</a>
      </div>
      <button type="button" class="btn btn-primary">注册</button>
    </form>
  </div>
</div>

                </div>
                <div class="col-sm">&nbsp;</div>
            </div>
        </div>

    <script src="/js/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="/js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    <script src="/js/user.js"></script>

    </body>
</html>
