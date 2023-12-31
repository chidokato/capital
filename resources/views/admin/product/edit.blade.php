@extends('admin.layout.main')
@section('content')
@include('admin.alert')

<form method="POST" action="{{route('product.update', [$data->id])}}" enctype="multipart/form-data">
@csrf
@method('PUT')

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed">
    <button type="button" id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
    <ul class="navbar-nav ">
        <li class="nav-item"> <a class="nav-link line-1" href="{{route('product.index')}}" ><i class="fa fa-chevron-left" aria-hidden="true"></i> <span class="mobile-hide">Quay lại</span> </a> </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item mobile-hide">
            <button type="reset" class="btn-danger mr-2 form-control"><i class="fas fa-sync"></i> Làm mới</button>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item">
            <button type="submit" class="btn-success form-control"><i class="far fa-save"></i> Lưu lại</button>
        </li>
    </ul>
</nav>

<div class="d-sm-flex align-items-center justify-content-between mb-3 flex" style="height: 38px;">
    <h2 class="h3 mb-0 text-gray-800 line-1 size-1-3-rem">{{$data->name}}</h2>
</div>

<div class="row">
  <div class="col-xl-9 col-lg-9">
        <div class="card shadow mb-2">
            <div class="card-header d-flex flex-row align-items-center justify-content-between">
                <ul class="nav nav-pills">
                    <li><a data-toggle="tab" class="nav-link active" href="#vi">Chỉnh sửa</a></li>
                </ul>
            </div>
            <div class="tab-content overflow">
                <div class="tab-pane active">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label>Name</label>
                                  <input value="{{$data->name}}" name="name" placeholder="..." type="text" class="form-control">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label>Address</label>
                                  <input name="address" value="{{$data->address}}" placeholder="..." type="text" class="form-control">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label>Sales policy</label>
                                  <textarea rows="4" name="content" class="form-control" id="ckeditor">{{$data->content}}</textarea>
                              </div>
                          </div>
                          
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-2">
            <div class="card-header py-3 pr-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Thêm tab</h6>
                <button class="button-none" type="button" id="add_section" onclick="addCode()"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm mới</button>
            </div>
            <div class="card-body add_to_me" id="add_to_me">
                <!-- <div class="form-group d-flex align-items-center justify-content-between" id="section_list">
                    <input class="form-control" type="text" name="name_section:vi[]" placeholder="Tiếng Việt">
                    <input class="form-control" type="text" name="name_section:en[]" placeholder="Tiếng Anh">
                    <input class="form-control" type="text" name="name_section:cn[]" placeholder="Tiếng Trung">
                    <button type="button" onClick="delete_row(this)" class="form-control w100"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
                </div> -->
            </div>
        </div>
        @foreach($section as $key => $val)
        <div class="card shadow mb-2 card-body">
          <div class="row">
            <input value="{{$val->id}}" name="edit_id_section[]" type="hidden" >
            <div class="col-md-4"><input value="{{$val->name}}" name="edit_name_section[]" placeholder="Tab" type="text" class="form-control"></div>
            <div class="col-md-4"><input name="img_section{{$key}}" placeholder="Header" type="file" class=""></div>
            <div class="col-md-4"><img style="height: 50px" src="data/product/{{$val->img}}"></div>
          </div>
        </div>
        @endforeach

<!-- SEO -->
<div class="card shadow mb-2 ">
  <div class="card-header d-flex flex-row align-items-center justify-content-between">
  <ul class="nav nav-pills">
  <li><a data-toggle="tab" class="nav-link active" href="#vi">SEO</a></li>
  </ul>
  </div>
  <div class="card-body">
  <div class="row">
  <div class="col-md-12">
  <div class="form-group">
  <label>Title</label>
  <input value="{{$data->title}}" name="title" placeholder="..." type="text" class="form-control">
  </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
  <label>Description</label>
  <input value="{{$data->description}}" name="description" placeholder="..." type="text" class="form-control">
  </div>
  </div>
  </div>
  </div>
</div>

    </div>
    <div class="col-xl-3 col-lg-3">
        <div class="card shadow mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Thông tin chi tiết</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="">Danh mục</label>
                    <select name='parent' class="form-control select2" id="parent">
                      <option value="">--Chọn danh mục--</option>
                      @foreach($category as $val)
                      <option <?php if($val->id == $data->category_tras_id){echo 'selected'; } ?> value="{{$val->id}}">{{$val->name}}</option>
                      @endforeach
                    </select>
                    <div id="list_parent"></div>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <div style="display: flex;">
                      <input name="price" value="{{$data->price}}" placeholder="..." type="text" class="form-control">
                      <select class="form-control" name="unit">
                        <option <?php if($data->unit == 'Tỷ'){ echo "selected"; } ?> value="Tỷ">Tỷ</option>
                        <option <?php if($data->unit == 'Triệu'){ echo "selected"; } ?> value="Triệu">Triệu</option>
                      </select>
                    </div>
                </div>
            </div>
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Images</h6>
            </div>
            <div class="card-body">
                <div class="file-upload">
                    <div class="file-upload-content" onclick="$('.file-upload-input').trigger( 'click' )">
                        <img class="file-upload-image" src="{{ isset($data) ? 'data/product/'.$data->post->img : 'data/no_image.jpg' }}" />
                    </div>
                    <div class="image-upload-wrap">
                        <input name="img" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                    </div>
                </div>
            </div>
          </div>
        <!-- <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Vị trí</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="">Tỉnh Thành</label>
                    <select class="form-control select2" id="province">
                      <option value="">...</option>
                      @foreach($province as $val)
                      <option value="{{$val->id}}">{{$val->name}}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="">Quận huyện</label>
                    <select class="form-control select2" id="district">
                      <option value="">...</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="">Phường xã</label>
                    <select required name="ward_id" class="form-control select2" id="ward">
                      <option value="">...</option>
                    </select>
                </div>
                
            </div>
          </div> -->
          
        <div class="card shadow mb-2">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Chọn nhiều ảnh</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="file" name="imgdetail[]" multiple class="form-control">
                    <p>Nhấn giữ <i style="color: red">Ctrl</i> để chọn nhiều ảnh !</p>
                </div>
                <div class="row detail-img">
                    @foreach($Images as $val)
                    <div class="col-md-4" id="detail_img">
                        <img src="data/product/detail/{{$val->img}}">
                        <button type="button" id="del_img_detail"> <i class="fa fa-times" aria-hidden="true"></i> </button>
                        <input type="hidden" name="id_img_detail" id="id_img_detail" value="{{$val->id}}" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
      </div>
</div>
</form>

<script>
    function addCode() {
        document.getElementById("add_to_me").insertAdjacentHTML("beforeend",
                '<div class="form-group d-flex align-items-center justify-content-between" id="section_list"><input class="form-control" type="text" name="name_section:vi[]" placeholder="Tiếng Việt"><input class="form-control" type="text" name="name_section:en[]" placeholder="Tiếng Anh"><input class="form-control" type="text" name="name_section:cn[]" placeholder="Tiếng Trung"><button type="button" onClick="delete_row(this)" class="form-control w100"><i class="fa fa-minus-circle" aria-hidden="true"></i></button></div>');
    }
    function delete_row(e) {
        e.parentElement.remove();
    }
</script>


@endsection