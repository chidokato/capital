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
            <div class="wrapper_tabcontent">
                <div id="pk" class="tabcontent active-tab"></div>
                <div id="pn" class="tabcontent"></div>
                <div id="bep" class="tabcontent"></div>
                <div id="tam" class="tabcontent"></div>
                <div id="logia" class="tabcontent"></div>
            </div>
            <div class="col-lg-12">
                <div class="tab-buton tabs">
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
                </div>
                
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    var tabLinks = document.querySelectorAll(".tablinks");
    // var tabContent =document.querySelectorAll(".tabcontent");

    tabLinks.forEach(function(el) {
       el.addEventListener("click", openTabs);
    });


    function openTabs(el) {
       var btn = el.currentTarget; // lắng nghe sự kiện và hiển thị các element
       var electronic = btn.dataset.electronic; // lấy giá trị trong data-electronic
     
       // tabContent.forEach(function(el) {
       //    el.classList.remove("active");
       // }); //lặp qua các tab content để remove class active

       tabLinks.forEach(function(el) {
          el.classList.remove("active-tab");
       }); //lặp qua các tab links để remove class active

       document.querySelector("#" + electronic).classList.add("active-tab");
       // trả về phần tử đầu tiên có id="" được add class active
       
       btn.classList.add("active-tab");
       // các button mà chúng ta click vào sẽ được add class active
    }
</script>