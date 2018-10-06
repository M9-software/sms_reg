@extends('layouts/app')

@section('title', 'Welcome')
@section('about_active', 'active')

@section('content')
<style>
.qrcode_p {
  font-size: 16px;
  color: #FFFFFF;
  margin-top: 10px;
  margin-left: 20px;
}
.about_title {
  font-size: 30px;
  margin-top: 50px;
  margin-bottom: 20px;
}
.about_content {
  font-size: 18px;
  margin-top: 20px;
  margin-right: 100px;
  margin-bottom: 50px;
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
          <img src="image/about_1.png" width="450">
        </div>
        <div class="col-sm">&nbsp; </div>
    </div>
  </div>
</section>

<section class="classification-type">
  <div class="classification-type-tabs">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <img src="image/about_2.png" width="380" style="margin: 20px;">
        </div>
        <div class="col-sm">
          <div class="about_title">全国高速分类</div>
          <p><img src="image/about_line.png" ></p>
          <div class="about_content">拥有全面的高速分类，分别有国家级（162条高速）、省级（239条高速）、路段（72条高速）、各省（31个省市），点击查看各个高速的实时路况异情详情，可语音播报与文字信息同步查看。</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="about_title">全国高速路况异情</div>
      <p><img src="image/about_line.png" ></p>
      <div class="about_content">汇集全国高速路况异情，丰富专业的信息来源。路况异情信息分别用不同颜色区分：绿色代表通行、黄色代表禁限行、红色代表封路。可通过个人中心的设置仅查看某一种或多种的异情信息。在线、离线两种语音播报方式，不必担心流量消耗。</div>
    </div>
    <div class="col-sm">
      <img src="image/about_3.png" width="420" style="margin: 20px;">
    </div>
  </div>
</div>
<section class="classification-type">
  <div class="classification-type-tabs">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <img src="image/about_4.png" width="380" style="margin: 20px;">
        </div>
        <div class="col-sm">
          <div class="about_title">指定路线播报异情</div>
          <p><img src="image/about_line.png" ></p>
          <div class="about_content">支持手动、语音识别、选择等多种输入方式搜索，搜索结果提供1-3种出行方案，提供语音播报与文字展示，边看边听解放双手更安全。设为常用路线后，可随时一键查看路段异情。</div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
