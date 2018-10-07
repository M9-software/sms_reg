<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit">
  <meta name="format-detection" content="telephone=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <!-- <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.css"> -->
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/common.css">
<!-- vendors -->
<script src="/js/vendors/jquery-1.12.4.min.js"></script>
<link rel="stylesheet" href="/css/vendors/swiper-4.1.6.min.css">
<script src="/js/vendors/swiper-4.1.6.min.js"></script>
<script src="/js/global.js"></script>
<!-- /vendors -->
  <title>@yield('title', 'w')</title>
</head>
<body>

<header class="navbar">
  <div class="container">
    <div class="navbar-menu">
      <span></span>
    </div>
    <div class="row">
      <div class="navbar-brand">
        <a href="#">
          <img src="/image/logo.png" alt="">
        </a>
      </div>
      <div class="navbar-nav-btn">
        <div class="navbar-nav">
          <ul>
            <li class="@yield('default_active', '')">
              <a href="/">实时异情</a>
            </li>
            <li class="@yield('about_active', '')">
              <a href="/about">功能介绍</a>
            </li>
            <li class="">
              <a href="/forum">论坛</a>
            </li>
          </ul>
        </div>
        <div class="navbar-btn">
        @if (!empty($s))
          <img src="image/user.png" width="50">
        @else
          <a class="" href="/login">登录</a>
          <a class="active" href="/registe">免费注册</a>
        @endif
        </div>
      </div>

    </div>

  </div>
</header>
