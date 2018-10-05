@extends('layouts/app')

@section('title', 'Welcome')

@section('content')
<section class="realtime-feeling">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-10">
        <div class="realtime-feeling-titel">
          <h2>全国高速实时异情滚动播放</h2>
          <a href="#">登录查看更多实时异情&gt;&gt;</a>
        </div>
        <div class="realtime-feeling-container">
          <div class="swiper-container realtime-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <p>01辽宁高速公路: 07-31 09:36 同时，抚顺东收费站沈阳方向禁止车辆驶入高速公路。</p>
              </div>
              <div class="swiper-slide">
                <p>02辽宁高速公路: 07-31 08:42 【路况信息】受交通事故影响，交警在G1212沈吉高速公路沈阳方向K22处（抚顺立交）实施分流交通管制，去往沈阳方向的车辆需提前从抚顺收费站驶离高速公路，再从热高乐园收费站重新驶入高速公路。</p>
              </div>
              <div class="swiper-slide">
                <p>03辽宁高速公路: 07-31 08:42 同时，抚顺收费站禁止车辆驶入高速公路。</p>
              </div>
              <div class="swiper-slide">
                <p>04河北高速公路: 07-31 10:48 (G20)青银高速-->【邢台】在南宫收费站至入口路段，发生交通事故，道路封闭。</p>
              </div>
              <div class="swiper-slide">
                <p>05河北高速公路: 07-31 10:48 (G20)青银高速-->【邢台】在新河收费站至入口路段，发生交通事故，道路封闭。</p>
              </div>
              <div class="swiper-slide">
                <p>06河北高速公路: 07-31 10:47 青银高速-->【邢台】在赵村收费站至入口路段，发生交通事故，道路封闭。</p>
              </div>
              <div class="swiper-slide">
                <p>07辽宁高速公路: 07-31 09:36 同时，抚顺东收费站沈阳方向禁止车辆驶入高速公路。</p>
              </div>
              <div class="swiper-slide">
                <p>08辽宁高速公路: 07-31 08:42 【路况信息】受交通事故影响，交警在G1212沈吉高速公路沈阳方向K22处（抚顺立交）实施分流交通管制，去往沈阳方向的车辆需提前从抚顺收费站驶离高速公路，再从热高乐园收费站重新驶入高速公路。</p>
              </div>
              <div class="swiper-slide">
                <p>09辽宁高速公路: 07-31 08:42 同时，抚顺收费站禁止车辆驶入高速公路。</p>
              </div>
              <div class="swiper-slide">
                <p>10河北高速公路: 07-31 10:48 (G20)青银高速-->【邢台】在南宫收费站至入口路段，发生交通事故，道路封闭。</p>
              </div>
              <div class="swiper-slide">
                <p>11河北高速公路: 07-31 10:48 (G20)青银高速-->【邢台】在新河收费站至入口路段，发生交通事故，道路封闭。</p>
              </div>
              <div class="swiper-slide">
                <p>12河北高速公路: 07-31 10:47 青银高速-->【邢台】在赵村收费站至入口路段，发生交通事故，道路封闭。</p>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-xs-2 col-lg-2 ">
        <div class="realtime-app-download">
          <img src="image/u20.png" alt="">
          <p>Android<br/>扫码下载APP</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 分类 -->
<section class="classification-type">
  <div class="classification-type-tabs">
    <div class="container">
      <div class="no-gutters">
        <div class="type-title">
          <p>选择高速公路分类</p>
        </div>
        <div class="type-list">
          <ul>
            <li class="active">
              <a href="javascript:;">各省高速公路分类
              </a>
            </li>
            <li>
              <a href="javascript:;">国家高速公路分类</a>
            </li>
            <li>
              <a href="javascript:;">省级高速公路分类</a>
            </li>
            <li>
              <a href="javascript:;">高速公路路段分类</a>
            </li>
          </ul>
        </div>
      </div>

    </div>

  </div>
  <div class="classification-swiper-container">
    <div class="container">

      <div class="swiper-container classification-swiper">

        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <ul>
              <li> <a href="#">广东高速</a> </li>
              <li> <a href="#">重庆高速</a> </li>
              <li> <a href="#">北京高速</a> </li>
              <li> <a href="#">天津高速</a> </li>
              <li> <a href="#">上海高速</a> </li>
              <li> <a href="#">深圳高速</a> </li>
              <li> <a href="#">浙江高速</a> </li>
              <li> <a href="#">江苏高速</a> </li>
              <li> <a href="#">安徽高速</a> </li>
              <li> <a href="#">山东高速</a> </li>
              <li> <a href="#">河南高速</a> </li>
              <li> <a href="#">湖北高速</a> </li>
              <li> <a href="#">湖南高速</a> </li>
              <li> <a href="#">江西高速</a> </li>
              <li> <a href="#">福建高速</a> </li>
              <li> <a href="#">广西高速</a> </li>
              <li> <a href="#">云南高速</a> </li>
              <li> <a href="#">贵州高速</a> </li>
              <li> <a href="#">四川高速</a> </li>
              <li> <a href="#">陕西高速</a> </li>
              <li> <a href="#">山西高速</a> </li>
              <li> <a href="#">河北高速</a> </li>
              <li> <a href="#">黑龙江高速</a> </li>
              <li> <a href="#">吉林高速</a> </li>
              <li> <a href="#">辽宁高速</a> </li>
              <li> <a href="#">内蒙古高速</a> </li>
              <li> <a href="#">宁夏高速</a> </li>
              <li> <a href="#">甘肃高速</a> </li>
              <li> <a href="#">青海高速</a> </li>
              <li> <a href="#">新疆高速</a> </li>
              <li> <a href="#">西藏高速</a> </li>
              <li> <a href="#">海南高速</a> </li>

            </ul>
          </div>
          <div class="swiper-slide">
            <ul>
              <li> <a href="#">G6京藏高速</a> </li>
              <li> <a href="#">G2京沪高速</a> </li>
              <li> <a href="#">G3京台高速</a> </li>
              <li> <a href="#">G5京昆高速</a> </li>
              <li> <a href="#">G1京哈高速</a> </li>
              <li> <a href="#">G4京港澳高速</a> </li>
              <li> <a href="#">G7京新高速</a> </li>
              <li> <a href="#">G11鹤大高速</a> </li>
              <li> <a href="#">G15沈海高速</a> </li>
              <li> <a href="#">G25长深高速</a> </li>
              <li> <a href="#">G35济广高速</a> </li>
              <li> <a href="#">G45大广高速</a> </li>
              <li> <a href="#">G55二广高速</a> </li>
              <li> <a href="#">G65包茂高速</a> </li>
              <li> <a href="#">G75兰海高速</a> </li>
              <li> <a href="#">G85渝昆高速</a> </li>
              <li> <a href="#">G10绥满高速</a> </li>
              <li> <a href="#">G12珲乌高速</a> </li>
              <li> <a href="#">G16丹锡高速</a> </li>
              <li> <a href="#">G18荣乌高速</a> </li>
              <li> <a href="#">G20青银高速</a> </li>
              <li> <a href="#">G22青兰高速</a> </li>
              <li> <a href="#">G30连霍高速</a> </li>
              <li> <a href="#">G36宁洛高速</a> </li>
              <li> <a href="#">G40沪陕高速</a> </li>
              <li> <a href="#">G42沪蓉高速</a> </li>
              <li> <a href="#">G50沪渝高速</a> </li>
              <li> <a href="#">G56杭瑞高速</a> </li>
              <li> <a href="#">G60沪昆高速</a> </li>
              <li> <a href="#">G70福银高速</a> </li>
              <li> <a href="#">G72泉南高速</a> </li>
              <li> <a href="#">G76厦蓉高速</a> </li>
              <li> <a href="#">G78汕昆高速</a> </li>

            </ul>
          </div>
          <div class="swiper-slide">
            <ul>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>

            </ul>
          </div>
          <div class="swiper-slide">
            <ul>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>
              <li>
                <a href="#">北京高速公路</a>
              </li>

            </ul>
          </div>

        </div>

      </div>
    </div>
  </div>

</section>
<!-- /分类 -->
<script>
  //切换菜单
  $('.navbar-menu').on('click', function () {
    $('.navbar-menu').toggleClass('navbar-menu-active');
    $('.navbar-nav-btn').slideToggle();
  })
  var dynamic = new Swiper('.realtime-swiper', {
    autoplay: true,
    direction: 'vertical',
    loop: true,
    slidesPerView: 'auto',
    noSwipingClass: 'swiper-slide'
  })
  //高速公路分类
  var classification = new Swiper('.classification-swiper', {
    autoplay: false,
    loop: false,
    navigation: {
      nextEl: '.classification-next',
      prevEl: '.classification-prev'
    },
    noSwipingClass: 'swiper-slide',
    on: {
      slideChangeTransitionStart: function () {
        $(".classification-type-tabs ul  .active").removeClass('active')
        $(".classification-type-tabs ul li").eq(this.activeIndex).addClass('active');
      }
    }
  })

  $(".classification-type-tabs .type-list ul li").on('touchstart click', function (e) {
    e.preventDefault()
    $(".classification-type-tabs ul li").removeClass('active')
    $(this).addClass('active');
    $('.classification-type-tabs .type-title p').text($(this).text());
    $(".classification-type-tabs .type-list").hide();

    classification.slideTo($(this).index())
  })
  //
  $(".classification-type-tabs .type-title").on('click', function (e) {
    $(this).next().toggle();
  })
</script>

@stop
