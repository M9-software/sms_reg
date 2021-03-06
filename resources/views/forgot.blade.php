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

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
    <form id="forgot_form" method="post" action="/user/forgot">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <div class="form-group">
        <input type="text" class="form-control" id="mobile_login" name="mobile" placeholder="请输入手机号">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="passwd_login" name="passwd" placeholder="Password">
      </div>
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
