@include('layouts/header')

@yield('content')

<!-- 异情报告 -->
<section class="situation-report">
  <div class="container">
    <div class="row">
      <div class="col-pic">
        <img class="img1" src="image/code-text01.png" alt="">
        <img class="img2" src="image/code-text02.png" alt="">
      </div>
      <div class="col-text">
        <img src="image/code.png" alt="">
        <p>Android扫码下载</p>
      </div>
    </div>
  </div>
</section>
<!-- /异情报告 -->

@include('layouts/footer')
