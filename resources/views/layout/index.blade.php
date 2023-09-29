<!DOCTYPE HTML>
<html lang="vi-VN">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<base href="{{asset('')}}">
<!-- seo -->
<title>@yield('title')</title>
<meta name="description" content="@yield('description')"/>
<meta name="keywords" itemprop="keywords" content="@yield('keywords')" />
<meta name="news_keywords" content="@yield('keywords')" />
<meta name="robots" content="@yield('robots')"/>
<link rel="shortcut icon" href="frontend/imgs/favicon.png" />
<link rel="canonical" href="@yield('url')"/>
<link rel="alternate" href="{{asset('')}}" hreflang="vi-vn" />
<!-- and seo -->
<!-- og -->
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:url" content="{{asset('')}}{{Session::get('locale')}}" />
<meta property="og:site_name" content="site_name" />
<meta property="og:images" content="{{asset('')}}frontend/imgs/cover_{{Session::get('locale')}}.png" />
<meta property="og:image" content="{{asset('')}}frontend/imgs/cover_{{Session::get('locale')}}.png" />
<meta property="og:image:alt" content="@yield('title')" />
<!-- and og -->
<!-- twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="@yield('title')" />
<meta name="twitter:description" content="@yield('description')" />
<!-- and twitter -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta property="article:author" content="admin" />

<link rel="stylesheet" type="text/css" href="frontend/css/font.css" />
<link rel="stylesheet" type="text/css" href="frontend/fullpage.css" />
<link rel="stylesheet" type="text/css" href="frontend/examples.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- front chữ -->
<link rel="stylesheet" type="text/css" href="frontend/css/slider-tienich.css" /> <!-- tiện ích -->

<!-- OwlCarousel2 -->
<link rel="stylesheet" type="text/css" href="frontend/owlcarousel/scss/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css">

<link rel="stylesheet" type="text/css" href="frontend/css/custom.css" /> <!-- main -->
<link rel="stylesheet" type="text/css" href="frontend/css/responsive.css" /> <!-- responsive -->

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!-- animation -->

<link href="https://fonts.googleapis.com/css2?family=Prata" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Cormorant Garamond" rel="stylesheet"> 

<link rel="stylesheet" href="frontend/css/loading.css"/>

<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '829865131467654');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=829865131467654&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


</head>
<body class="bg" id="style-1">

<div class='loadd'>
    <div class='body'>
        <img src="frontend/imgs/logo-09.png">
    </div>
</div>

<h1 style="position: absolute; left: -10000px">Chung cư Capital Elite 18 Phạm Hùng</h1>

<a href="{{asset('')}}"><img class="logo" src="frontend/imgs/logo-09.png"></a>

<div id="fullpage">
    <div class="section active chinh-sach" style="background: url(frontend/imgs/chinh-sach-ban-hang_1.jpg); background-position: bottom; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    
                </div>
                <div class="col-lg-5 left" data-aos="fade-right">
                    <h2 style="position: absolute; left: -10000px">Tổng quan dự án Capital Elite 18 Phạm Hùng</h2>
                    <a id="modal" href="" data-toggle="modal" data-target="#exampleModal">
                    <img style="width: 60%; margin-top: 40%" alt="Chung cư Capital Elite 18 Phạm Hùng" class="text" src="frontend/imgs/chinh sach ban hang-03.png">
                    </a>
                </div>
                <div class="col-lg-5 right" data-aos="fade-left">
                </div>
            </div>
        </div>
    </div>

    <div class="section home " style="background: url(frontend/imgs/capital-elite-new-01.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    
                </div>
                <div class="col-lg-5 left" data-aos="fade-right">
                    <h2 style="position: absolute; left: -10000px">Tổng quan dự án Capital Elite 18 Phạm Hùng</h2>
                    <img alt="Chung cư Capital Elite 18 Phạm Hùng" class="text" src="frontend/imgs/capital-elite_new-03.png">
                    <!-- <img alt="Chung cư Capital Elite 18 Phạm Hùng" class="text" src="frontend/imgs/lang/toangquantext_{{Session::get('locale')}}.png"> -->
                    
                </div>
                <div class="col-lg-5 right" data-aos="fade-left">
                    <img class="capital" src="frontend/imgs/capital elite_new-02.png">
                </div>
            </div>
        </div>
    </div>

    <div class="section fp-table video ">
        <div class="container">
            <div class="row">
            <video id="myVideo" loop muted data-autoplay playsinline >
                <source src="frontend/video/capital_vi.mp4" type="video/mp4">
                <source src="frontend/video/capital_vi.webm" type="video/webm">
            </video>
        </div>
        </div>
    </div>

    @foreach($post as $key => $val) 
        @if($key==0)
            @include('pages.ladingpage.tongquan')
        @elseif($key==1)
            @include('pages.ladingpage.vitri')
        @elseif($key==2)
            @include('pages.ladingpage.lienketvung')
        @elseif($key==3)
            @include('pages.ladingpage.lienich')
        @elseif($key==4)
            @include('pages.ladingpage.thietkecanho')
        @elseif($key==5)
            @include('pages.ladingpage.lienhe')
        @endif

    @endforeach


    
</div>

<div class="header">
    <ul>
        <li> <a id="modal" href="" data-toggle="modal" data-target="#exampleModal"><img src="frontend/imgs/icon-register.svg"> <span>{{__('lang.contact')}}</span></a></li>  
        <li> <a href="tel:0916442096"><img src="frontend/imgs/icon-call.svg"> <span>0916 442 096</span></a></li>  
    </ul>
</div>
<div class="header-lang">
    <ul>
        <li class="lang" > <a href="lang/vi"><img src="frontend/imgs/vn-1x.webp"> </a></li>
        <li class="lang" > <a href="lang/en"><img src="frontend/imgs/gb-1x.webp"> </a></li>
        <li class="lang" > <a href="lang/cn"><img src="frontend/imgs/cn-1x.webp"> </a></li>
    </ul>
</div>

@if (Session::has('success'))
    <div class="success" id="hidden">
        <div>Đã gửi thành công !</div>
    </div>
@endif



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog popup-dangky" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{__('lang.nhanthongtin')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="validateForm" action="dangky" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="{{__('lang.hoten')}}" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="{{__('lang.sdt')}} *" name="phone">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="{{__('lang.email')}}" name="email">
            </div>
            <div class="form-group">
                <textarea name="content" class="form-control" rows="5" placeholder="{{__('lang.lnhan')}}"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{__('lang.guitt')}}</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src='//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>
<script type='text/javascript'>
    $(window).load(function () {
        setTimeout(function () {
            $(".loadd").fadeOut("slow");
        }, 800)
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="frontend/fullpage.js"></script>
<script type="text/javascript" src="frontend/examples.js"></script>

<!-- slider tiện ích -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/CSSPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/TextPlugin.min.js"></script>
<script src="frontend/js/demo.js"></script> -->

<!-- OwlCarousel2 -->
<script src="frontend/owlcarousel/js/owl.carousel.js"></script>
<script src="frontend/js/thuvien.js"></script>

<!-- validate -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script src="frontend/js/validate.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // AOS.init();
    AOS.init({
      disable: function() {
        var maxWidth = 800;
        return window.innerWidth < maxWidth;
      }
    });
</script>

<!-- laryload -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js" async=""></script>

<!-- jquery.maphilight.min.js -->
<script src="frontend/js/jquery.maphilight.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#img1").hover(function(){ $(".imagemaps").toggleClass("imagemaps-bg1"); });
        $("#img2").hover(function(){ $(".imagemaps").toggleClass("imagemaps-bg2"); });
        $("#img3").hover(function(){ $(".imagemaps").toggleClass("imagemaps-bg3"); });
        $("#img4").hover(function(){ $(".imagemaps").toggleClass("imagemaps-bg4"); });
        $("#img5").hover(function(){ $(".imagemaps").toggleClass("imagemaps-bg5"); });
        $("#img6").hover(function(){ $(".imagemaps").toggleClass("imagemaps-bg6"); });
    });
</script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        verticalCentered: false,
        // sectionsColor: ['#0c254e', '#1f4481', '#0c254e', '#0c254e', '#0c254e', '#0c254e', '#0c254e'], // backgroud corlor
        anchors: [
            'chinh-sach',
            'Capital-Elite',
            @foreach($category as $key => $val)
            '{{$val->category->slug}}',
            @endforeach
            ],
        // verticalCentered: false,
        navigation:true,
        navigationTooltips: [
            'Chính sách bán hàng',
            'Capital Elite',
            @foreach($category as $key => $val)
            '{{$val->category->name}}',
            @endforeach
            ],
        showActiveTooltip: true,
        navigationPosition: "left",

        menu: '#menu', // menu
        continuousVertical: false, // lăn chuột quay vòng lên đầu
        // Slider
        // controlArrows: false, // ẩn nút slider
        controlArrows: true, // hiện nút slider
        controlArrowsHTML: ['<div class="my-arrow"><i class="fas fa-arrow-alt-circle-left"></i></i></div>','<div class="my-arrow"><i class="fas fa-arrow-alt-circle-right"></i></div>',], // sửa icon slider
        slidesNavigation: true, // chấm tròn bên dưới slider
        // end slider
        css3:true,
        
        onLeave: function(origin, destination, direction){
          if(destination.index === 2){
             destination.item.classList.add('load-background');
          }
        },
        
        onLeave: function(){
            $('.section [data-aos]').each(function(){
                $(this).removeClass("aos-animate")
            });
        },
        afterLoad: function(){
            $('.section.active [data-aos]').each(function(){
                $(this).addClass("aos-animate")
            });
        },

        responsiveWidth: 991,
        afterResponsive: function(isResponsive){

        }

    });
</script>
</body>
</html>