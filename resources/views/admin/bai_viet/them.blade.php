@extends('admin.layout.index')
@section('scripts')
  <script type="text/javascript">
    var i=1;
    var j=1;
     $(document).on('click','#add',function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" id="name'+i+'" class="form-control"placeholder="Tên nguyên liệu"></td><td><input type="text"  name="number[]" id="number'+i+'" class="form-control"placeholder="Số lượng"></td><td> <i class="icon-fa icon-fa-close remove_nl" id="'+i+'"></i></td></tr>');
     });
     $(document).on('click','.remove_nl',function(){
         var button_id=$(this).attr("id");
         $("#row"+button_id+"").remove();
     });
     $(document).on('click','#add_step_new',function(){
        j++;
        $('#dynamic_field_step').append('<tr id="row_step'+j+'"><td><textarea class="form-control" name="mota[]" id="mota'+j+'" rows="3" name="decription"></textarea></td><td><input type="file" class="form-control-file" id="hinh_step'+j+'" name="hinh_step[]"></td><td><i class="icon-fa icon-fa-close remove_step" id="'+j+'"></i></td></tr>');
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
            <form id="validateForm" method="POST" action="admin/baiviet/them">
                @csrf
                <div class="form-group">
                    <label><b>Tên món ăn mới*</b></label>
                    <input type="text" class="form-control" name="name"
                           placeholder="Name">
                </div>
                <div class="form-group">
                        <label for="exampleInputFile"><b>Hình ảnh</b></label>
                        <input type="file" class="form-control-file" id="exampleInputFile" name="hinh">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea"><b>Mô tả về món ăn</b></label>
                    <textarea class="form-control" id="exampleTextarea" rows="3" name="decription"></textarea>
                </div>
                <div class="form-group">
                    <label><b>Thời gian thực hiện*</b></label>
                    <div class="input-group ls-clockpicker" data-placement="left" data-align="top"
                             data-autoclose="true">
                        <input type="text" class="form-control" value="00:30">
                        <span class="input-group-addon">
                            <i class="icon-fa icon-fa-clock-o"></i>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label><b>Số người ăn*</b></label>
                    <input type="text" class="form-control" name="name"
                                   placeholder="Name">
                </div>
                <div class="form-group">
                        <label><b>Nguyên liệu*</b></label>
                         <p></p>
                         <form name="add_name" id="add_name">
                             <table class="table table-bordered" id="dynamic_field">
                                  <tr id="row1">
                                      <td><input type="text" name="name[]" id="name1" class="form-control"
                                        placeholder="Tên nguyên liệu"></td>
                                        <td><input type="text" class="form-control" name="number[]" id="number1"
                                            placeholder="Số lượng"></td>
                                        <td> <i class="icon-fa icon-fa-close remove_nl" id="1"></i></td>
                                  </tr>
                             </table>
                         </form>
                         <i class="icon-fa icon-fa-plus-circle" id="add" style="cursor:pointer"><b>  Thêm nguyên liệu </b></i>
                         <br>
                </div>
                <div class="form-group">
                    <label><b>Bước thực hiện*</b></label>
                     <p></p>
                     <form name="add_name" id="add_step">
                         <table class="table table-bordered" id="dynamic_field_step">
                              <tr id="row_step1">
                                  <td> <textarea class="form-control" name="mota[]" id="mota1" rows="3" ></textarea></td>
                                    <td><input type="file" class="form-control-file" id="hinh_step1" name="hinh_step[]"></td>
                                    <td><i class="icon-fa icon-fa-close remove_step" id="1"></i></td>
                              </tr>
                         </table>
                     </form>
                     <i class="icon-fa icon-fa-plus-circle" id="add_step_new" style="cursor:pointer"><b>  Thêm bước thực hiện </b></i>
                     <br>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Thực đơn</b></label>
                        <select class="form-control" id="">
                              @foreach ( $thucdon as $td )
                                 <option>{{$td->name}}</option>
                              @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Loại món</b></label>
                        <select class="form-control" id="exampleSelect1">
                            @foreach ( $loaimon as $lm )
                               <option>{{$lm->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Nguyên liệu chính</b></label>
                        <select class="form-control" id="exampleSelect1">
                            @foreach ( $nguyenlieuchinh as $nlc )
                                <option>{{$nlc->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Độ khó</b></label>
                        <select class="form-control" id="exampleSelect1">
                            @foreach ( $dokho as $dk )
                                    <option>{{$dk->name}}</option>
                             @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Ẩm thực</b></label>
                        <select class="form-control" id="exampleSelect1">
                            @foreach ( $amthuc as $at )
                                <option>{{$at->name}}</option>
                             @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Phương pháp nấu</b></label>
                        <select class="form-control" id="exampleSelect1">
                            @foreach ( $phuongphap as $pp )
                                <option>{{$pp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label><b>Tags</b></label>
                <input type="text" class="form-control" name="tags"
                                                           placeholder="thịt bò; thịt heo;etc..">
            </div>
                <button class="btn btn-primary" id ="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
