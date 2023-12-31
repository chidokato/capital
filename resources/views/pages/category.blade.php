@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('content')
<div id="page_wrapper" class="bg-light">
@include('layout.header_page')

<div class="full-row py-5" style="margin-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col inner-page-banner">
                <h3 class="text-secondary">{{$data->name}}</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="{{asset('')}}">{{__('lang.home')}}</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">{{$data->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="full-row pt-0">
            <div class="container">
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                    @foreach($post as $val)
                        @include('pages.iteam.product')
                    @endforeach
                </div>
                <div class="row">
                    <div class="col mt-5">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-dotted-active justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link">Previous Page</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next Page</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

@include('layout.footer')
</div>
@endsection
@section('script')

@endsection