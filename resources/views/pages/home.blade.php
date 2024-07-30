@extends('layout.index')

@section('title') Chung cư Capital Elite 18 Phạm Hùng - Chủ Đầu Tư @endsection
@section('description') Chung cư Capital Elite 18 Phạm Hùng là một dự án căn hộ hạng sang tọa lạc tại số 18 đường Phạm Hùng, phường Mỹ Đình 2, quận Nam Từ Liêm, Hà Nội @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('content')

<div class='loadd'>
    <div class='body'>
        <img src="frontend/imgs/logo-09.png">
    </div>
</div>

<h1 style="position: absolute; left: -10000px">Chung cư Capital Elite 18 Phạm Hùng</h1>

<a href="{{asset('')}}"><img class="logo" src="frontend/imgs/logo-09.png"></a>

<div id="fullpage">
    <div class="section active chinh-sach" >
        <div class="container">
            <div class="row">
                <div class="col-lg-2"> 
                    
                </div>
                <div class="col-lg-5 left" data-aos="fade-right">
                    <h2 style="position: absolute; left: -10000px">Tổng quan dự án Capital Elite 18 Phạm Hùng</h2>
                    <img class="anh1" src="frontend/imgs/tongquan1.png">
                    <a id="modal" href="" data-toggle="modal" data-target="#exampleModal">
                    <img class="anh2" alt="Chung cư Capital Elite 18 Phạm Hùng" class="text" src="frontend/imgs/chinhsach-29-7.png">
                    </a>
                </div>
                <div class="col-lg-5 right" data-aos="fade-left">
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="section home " style="background: url(frontend/imgs/capital-elite-new-01.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    
                </div>
                <div class="col-lg-5 left" data-aos="fade-right">
                    <h2 style="position: absolute; left: -10000px">Tổng quan dự án Capital Elite 18 Phạm Hùng</h2>
                    <img alt="Chung cư Capital Elite 18 Phạm Hùng" class="text" src="frontend/imgs/capital-elite_new-03.png">
                    
                </div>
                <div class="col-lg-5 right" data-aos="fade-left">
                    <img class="capital" src="frontend/imgs/capital elite_new-02.png">
                </div>
            </div>
        </div>
    </div> -->

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
            @include('pages.ladingpage.matbang')
        @elseif($key==6)
            @include('pages.ladingpage.canho')
        @elseif($key==7)
            @include('pages.ladingpage.lienhe')
        @endif
    @endforeach


    
</div>

<div class="header">
    <ul>
        <li> <a id="modal" href="" data-toggle="modal" data-target="#exampleModal"><img src="frontend/imgs/icon-register.svg"> <span>{{__('lang.contact')}}</span></a></li>  
        <li> <a href="tel:0377704444"><img src="frontend/imgs/icon-call.svg"> <span>037 770 4444</span></a></li>  
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

@endsection
 

@section('script')

@endsection