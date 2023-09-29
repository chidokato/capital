<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Active Slide - fullPage.js</title>
    <meta name="author" content="Matthew Howell" />
    <meta name="description" content="fullPage continuous scrolling demo." />
    <meta name="keywords"  content="fullpage,jquery,demo,scroll,loop,continuous" />
    <meta name="Resource-type" content="Document" />

    <link rel="stylesheet" type="text/css" href="frontend/css/font.css" />
    <link rel="stylesheet" type="text/css" href="frontend/fullpage.css" />
    <link rel="stylesheet" type="text/css" href="frontend/examples.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- OwlCarousel2 -->
    <link rel="stylesheet" type="text/css" href="frontend/owlcarousel/scss/owl.carousel.css" />

    <link rel="stylesheet" type="text/css" href="frontend/css/custom.css" />
</head>
<body>

<!-- <ul id="menu">
    <li data-menuanchor="firstPage" class="active"><a href="#firstPage">First slide</a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
</ul> -->

<div id="fullpage">
    <div class="section active home bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-5 left">
                    <img class="text" src="frontend/imgs/toangquantext.png">
                </div>
                <div class="col-lg-5 right">
                    <img class="capital" src="frontend/imgs/capitalelite.png">
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="section video">
        <video id="myVideo" loop muted data-autoplay playsinline controls>
            <source src="frontend/video/capital_vi.mp4" type="video/mp4">
            <source src="frontend/video/capital_vi.webm" type="video/webm">
        </video>
    </div> -->

    @foreach($post as $key => $val)
        @if($key==0)
        <div class="section tongquan bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-3 box-content li_style" data-aos="fade-right">
                        {!! $val->content !!}
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 image" data-aos="fade-left">
                        <img src="frontend/imgs/tongquan.png">
                    </div>
                </div>
            </div>
        </div>
        @elseif($key==1)
        @elseif($key==2)
        @elseif($key==3)
        @elseif($key==4)
        @elseif($key==5)
        @endif

    @endforeach

</div>

<!-- fix -->
<img class="logo" src="frontend/imgs/logo-09.png">
<div class="header">
    <ul>
        <li> <a href=""><img src="frontend/imgs/icon-register.svg"> <span>Liên hệ nhận chính sách ưu đãi</span></a></li>  
        <li> <a href="tal:0977 572 947"><img src="frontend/imgs/icon-call.svg"> <span>0977 572 947</span></a></li>  
    </ul>
</div>
<div class="header-lang">
    <ul>
        <li class="lang" > <a href="lang/vi"><img src="frontend/imgs/vn-1x.webp"> </a></li>
        <li class="lang" > <a href="lang/en"><img src="frontend/imgs/gb-1x.webp"> </a></li>
        <li class="lang" > <a href="lang/cn"><img src="frontend/imgs/cn-1x.webp"> </a></li>
    </ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="frontend/fullpage.js"></script>

<script src="frontend/owlcarousel/js/owl.carousel.js"></script>
<script src="frontend/js/thuvien.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        // sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
        anchors: [
            'home',
            @foreach($category as $key => $val)
            '{{$val->category->slug}}',
            @endforeach
            ],
        navigation:true,
        navigationTooltips: [
            'Capital Elite',
            @foreach($category as $key => $val)
            '{{$val->category->name}}',
            @endforeach
            ],
        // menu: '#menu',
        lazyLoad: true,
        credits: {enabled: false},
        showActiveTooltip: true, // hiển thị navi
        navigationPosition: "left", // navi bên trái
        continuousVertical: false, // lăn chuột quay vòng lên đầu

        responsiveWidth: 991,
        afterResponsive: function(isResponsive){
        }

    });
</script>

</body>
</html>