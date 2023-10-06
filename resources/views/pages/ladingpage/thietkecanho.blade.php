<?php use App\Models\SectionTranslation; ?>
<?php $section = SectionTranslation::where('locale', $val->locale)->where('post_id', $val->post_id)->orderBy('view', 'ASC')->get(); ?>
<div class="section thietkecanho ">
    <div class="container">
        <div class="row tkch-1">
            <div class="col-lg-2"></div>
            <div class="col-lg-6 col-sm-5">
                <div class="img" data-aos="fade-down-right">
                  <h2 style="position: absolute; left: -10000px">thiết kế căn hộ Capital Elite 18 Phạm Hùng</h2>
                    <img class="lazyload" data-src="frontend/imgs/lang/thietkecanho_{{Session::get('locale')}}.png">
                </div>
            </div>
            <div class="col-lg-4 col-sm-7"data-aos="fade-down-left">
                <div class="content">{!! $val->content !!}</div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-12">
                <!-- <div class="tab-buton tabs">
                    <button class="tablinks active-tab" data-electronic="pk" id="tkch" value="pk">{{__('lang.phongkhach')}}</button>
                    <button class="tablinks" data-electronic="pn" id="tkch" value="pn">{{__('lang.phungngu')}}</button>
                    <button class="tablinks" data-electronic="bep" id="tkch" value="bep">{{__('lang.Phongbep')}}</button>
                    <button class="tablinks" data-electronic="tam" id="tkch" value="tam">{{__('lang.phongtam')}}</button>
                    <button class="tablinks" data-electronic="logia" id="tkch" value="logia">{{__('lang.logia')}}</button>
                </div>

                <div id="slider-tkch">
                    <div class="owl-carousel owl-theme slider-tkch">
                        <div class="item"><img class="lazyload" data-src="frontend/imgs/khach/pk1.jpg"></div>
                        <div class="item"><img class="lazyload" data-src="frontend/imgs/khach/pk2.jpg"></div>
                        <div class="item"><img class="lazyload" data-src="frontend/imgs/khach/pk3.jpg"></div>
                        <div class="item"><img class="lazyload" data-src="frontend/imgs/khach/pk4.jpg"></div>
                        <div class="item"><img class="lazyload" data-src="frontend/imgs/khach/pk5.jpg"></div>
                        <div class="item"><img class="lazyload" data-src="frontend/imgs/khach/pk6.jpg"></div>
                    </div>
                </div> -->
                <div class="tabtkch">
                    <button class="tablinks1 active" onclick="tkcanho(event, 'phongkhach')">{{__('lang.phongkhach')}}</button>
                    <button class="tablinks1" onclick="tkcanho(event, 'phungngu')">{{__('lang.phungngu')}}</button>
                    <button class="tablinks1" onclick="tkcanho(event, 'Phongbep')">{{__('lang.Phongbep')}}</button>
                    <button class="tablinks1" onclick="tkcanho(event, 'phongtam')">{{__('lang.phongtam')}}</button>
                    <button class="tablinks1" onclick="tkcanho(event, 'logia')">{{__('lang.logia')}}</button>
                </div>

                <div id="phongkhach" class="tabcontent tabcontent1" style="display: block;">
                    <div class="listanhcanho">
                        <img class="lazyload" data-src="frontend/imgs/khach/pk1.webp">
                        <img class="lazyload" data-src="frontend/imgs/khach/pk2.webp">
                        <img class="lazyload" data-src="frontend/imgs/khach/pk3.webp">
                        <img class="lazyload" data-src="frontend/imgs/khach/pk4.webp">
                    </div>
                </div>
                <div id="phungngu" class="tabcontent tabcontent1">
                    <div class="listanhcanho">
                        <img class="lazyload" data-src="frontend/imgs/phongngu/phongngu1.webp">
                        <img class="lazyload" data-src="frontend/imgs/phongngu/phongngu2.webp">
                        <img class="lazyload" data-src="frontend/imgs/phongngu/phongngu3.webp">
                        <img class="lazyload" data-src="frontend/imgs/phongngu/phongngu4.webp">
                    </div>
                </div>
                <div id="Phongbep" class="tabcontent tabcontent1">
                    <div class="listanhcanho">
                        <img class="lazyload" data-src="frontend/imgs/bep/bep1.webp">
                        <img class="lazyload" data-src="frontend/imgs/bep/bep2.webp">
                        <img class="lazyload" data-src="frontend/imgs/bep/bep3.webp">
                        <img class="lazyload" data-src="frontend/imgs/bep/bep4.webp">
                    </div>
                </div>
                <div id="phongtam" class="tabcontent tabcontent1">
                    <div class="listanhcanho">
                        <img class="lazyload" data-src="frontend/imgs/phongtam/phongtam1.webp">
                        <img class="lazyload" data-src="frontend/imgs/phongtam/phongtam2.webp">
                        <img class="lazyload" data-src="frontend/imgs/phongtam/phongtam3.webp">
                        <img class="lazyload" data-src="frontend/imgs/phongtam/phongtam4.webp">
                    </div>
                </div>
                <div id="logia" class="tabcontent tabcontent1">
                    <div class="listanhcanho">
                        <img class="lazyload" data-src="frontend/imgs/logia/logia1.webp">
                        <img class="lazyload" data-src="frontend/imgs/logia/logia2.webp">
                        <img class="lazyload" data-src="frontend/imgs/logia/logia3.webp">
                        <img class="lazyload" data-src="frontend/imgs/logia/logia4.webp">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
