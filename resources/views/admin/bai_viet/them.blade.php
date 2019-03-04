@extends('admin.layout.index')
@section('scripts')
  <script type="text/javascript">
    var i=1;
    var j=1;
     $(document).on('click','#add',function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" id="name" class="form-control"placeholder="Tên nguyên liệu"></td><td><input type="text"  name="number[]" id="number" class="form-control"placeholder="Số lượng"></td><td> <i class="icon-fa icon-fa-close remove_nl" id="'+i+'"></i></td></tr>');
     });
     $(document).on('click','.remove_nl',function(){
         var button_id=$(this).attr("id");
         $("#row"+button_id+"").remove();
     });
     $(document).on('click','#add_step_new',function(){
        j++;
        $('#dynamic_field_step').append('<tr id="row_step'+j+'"><td><textarea class="form-control" name="mota[]" id="mota" rows="3" name="decription"></textarea></td><td><input type="file" class="form-control-file" id="hinh_step" name="hinh_step[]"></td><td><i class="icon-fa icon-fa-close remove_step" id="'+j+'"></i></td></tr>');
     });
     $(document).on('click','.remove_step',function(){
         var step_id=$(this).attr("id");
         $("#row_step"+step_id+"").remove();
     });
  </script>
@endsection
@section('content')
<div class="main-content">
    <div class="page-header">
        <h3 class="page-title">Bài viết</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
            <li class="breadcrumb-item active">Thêm</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-header">
            <h6>Thêm</h6>
        </div>
        <div class="card-block">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                   @foreach ($errors->all() as $err)
                     {{$err}}<br>
                   @endforeach
                </div>
                @endif
                @if (session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                @if(session('loi'))
                <div class="alert alert-success">
                        {{session('loi')}}
                    </div>
                @endif
           <form id="validateForm" method="POST" action="admin/baiviet/them" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label"><b>Tên món ăn mới*</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Ten mon moi" name="cc" id="ten">
                    </div>
                </div>
                <div class="form-group  row">
                    <label for="exampleInputFile" class="col-sm-2 form-control-label"><b>Hình ảnh*</b></label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="" name="hinh">
                    </div>
                </div>
                <div class="form-group">
                        <label>Top day</label>
                        <input type="checkbox" class="ls-switch" name="top_day"/>
                </div>
                <div class="form-group">
                            <label>Top week</label>
                            <input type="checkbox" class="ls-switch" name="top_week"/>
                </div>
                <div class="form-group row">
                    <label for="exampleTextarea" class="col-sm-2 form-control-label"><b>Mô tả về món ăn</b></label>
                    <div class="col-sm-10">
                            <textarea class="form-control" id="exampleTextarea" rows="3" name="describe"></textarea>
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col form-control-label"><b>Thời gian thực hiện*</b></label>
                    <div class="col">
                        <input type="number" class="form-control" name="gio" placeholder="Số giờ" min="0" value="0">
                    </div>
                    <div class="col">
                        <label class="form-control-label"> Giờ</label>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" name="phut" placeholder="Số giờ" min="0" value="0">
                    </div>
                    <div class="col">
                        <label class="form-control-label">Phút</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label"><b>Số người ăn*</b></label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="songuoian"
                            placeholder="Số người ăn" min="0" value="1">
                    </div>

                </div>
                <div class="form-group">
                        <label><b>Nguyên liệu*</b></label>
                         <p></p>
                         <div name="add_name" id="add_name">
                             <table class="table table-bordered" id="dynamic_field">
                                  <tr id="row1">
                                      <td><input type="text" name="name[]" id="name" class="form-control"
                                        placeholder="Tên nguyên liệu"></td>
                                        <td><input type="text" class="form-control" name="number[]" id="number"
                                            placeholder="Số lượng"></td>
                                        <td> <i class="icon-fa icon-fa-close remove_nl" id=""></i></td>
                                  </tr>
                             </table>
                         </div>
                         <i class="icon-fa icon-fa-plus-circle" id="add" style="cursor:pointer"><b>  Thêm nguyên liệu </b></i>
                         <br>
                </div>
                <div class="form-group">
                    <label><b>Bước thực hiện*</b></label>
                     <p></p>
                     <div name="add_name" id="add_step">
                         <table class="table table-bordered" id="dynamic_field_step">
                              <tr id="row_step1">
                                  <td> <textarea class="form-control" name="mota[]" id="mota" rows="3" ></textarea></td>
                                    <td><input type="file" class="form-control-file" id="hinh_step" name="hinh_step[]"></td>
                                    <td><i class="icon-fa icon-fa-close remove_step" id=""></i></td>
                              </tr>
                         </table>
                </div>
                     <i class="icon-fa icon-fa-plus-circle" id="add_step_new" style="cursor:pointer"><b>  Thêm bước thực hiện </b></i>
                     <br>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Thực đơn</b></label>
                        <select class="form-control ls-select2" id="" name="ThucDon">
                              @foreach ( $thucdon as $td )
                        <option value="{{$td->id}}">{{$td->name}}</option>
                              @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Loại món</b></label>
                        <select class="form-control ls-select2" id="" name="LoaiMon">
                            @foreach ( $loaimon as $lm )
                               <option value="{{$lm->id}}">{{$lm->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Nguyên liệu chính</b></label>
                        <select class="form-control ls-select2" id="" name="NguyenLieuChinh">
                            @foreach ( $nguyenlieuchinh as $nlc )
                                <option value="{{$nlc->id}}">{{$nlc->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Độ khó</b></label>
                        <select class="form-control ls-select2" id="" name="DoKho">
                            @foreach ( $dokho as $dk )
                                    <option value="{{$dk->id}}">{{$dk->name}}</option>
                             @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Ẩm thực</b></label>
                        <select class="form-control ls-select2" id="" name="AmThuc">
                            @foreach ( $amthuc as $at )
                                <option value="{{$at->id}}">{{$at->name}}</option>
                             @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Phương pháp nấu</b></label>
                        <select class="form-control  ls-select2" id="" name="PhuongPhap">
                            @foreach ( $phuongphap as $pp )
                                <option value="{{$pp->id}}">{{$pp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label><b>Tags</b></label>
                <input type="text" class="form-control" name="tags"
                    placeholder="thịt bò, thịt heo, etc..">
            </div>
            <button class="btn btn-primary" id="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
