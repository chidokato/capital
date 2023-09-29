<?php use App\Models\SectionTranslation; ?>
<?php $section = SectionTranslation::where('locale', $val->locale)->where('post_id', $val->post_id)->orderBy('view', 'ASC')->get(); ?>
<div class="section tienich ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" >
                <div class="img" data-aos="fade-down">
                    <h2 style="position: absolute; left: -10000px">tiện ích dự án Capital Elite 18 Phạm Hùng</h2>
                    <img class="lazyload" data-src="frontend/imgs/lang/tienich_{{Session::get('locale')}}.png">
                </div>
                <div class="title" data-aos="fade-up">{!! $val->content !!}</div>
            </div>
            <div class="col-lg-12 " data-aos="fade-up">
                <div class="owl-carousel owl-theme slider-tienich">
                    @foreach($section as $sec)
                    <div class="item">
                        <img class="lazyload" data-src="data/product/{{$sec->img}}">
                        <h3>{{$sec->name}}</h3>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
