@extends('layout.index')
@section('scripts')
<script >
        var i=1;
        var j=1;
        function themnguyenlieu(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="names[]" id="names" class="form-control"placeholder="Tên nguyên liệu" required></td><td><input type="text"  name="numbers[]" id="numbers" class="form-control"placeholder="Số lượng" required></td><td> <i class="fas fa-times remove_nl" onclick="remove_nl('+i+')" id="'+i+'"></i></td></tr>');
        }
        function remove_nl(i){
           var button_id=i;
           $("#row"+button_id+"").remove();
        }
        function them_bth(){
            j++;
           $('#dynamic_field_step').append('<tr id="row_step'+j+'"><td><textarea class="form-control" name="motas[]" id="motas" rows="3" name="decription" required ></textarea></td><td><input type="text" hidden value="" name="link_image[]" id="link_image"><td><input type="file" class="form-control-file" id="hinh_steps" name="hinh_steps[]" required></td><td><i class="fas fa-times remove_step" onclick="remove_bth('+j+')" id="'+j+'"></i></td></tr>');
        }
        function remove_bth(j){
            var step_id=j;
            $("#row_step"+step_id+"").remove();
        }
</script>

@endsection
@section('content')
<div class="card can-le" style="padding:20px;">
        <div class="card-header">
            <h6>Sửa</h6>
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
                <form id="validateForm" method="POST" action="baiviet/sua/{{$baiviet->id}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label"><b>Tên món ăn mới*</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Ten mon moi" name="cc" id="ten" value="{{$baiviet->name}}" required>
                    </div>
                </div>
                <div class="form-group  row">
                    <label for="exampleInputFile" class="col-sm-2 form-control-label"><b>Hình ảnh*</b></label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="" name="hinh">
                    </div>
                    <img src="upload/image_baiviet/{{$baiviet->link_image}}" width="80%" height="80%" style="margin-left:200px;">
                </div>
                <div class="form-group row">
                    <label class="col form-control-label"><b>Thời gian thực hiện*</b></label>
                    <div class="col">
                    <input type="number" class="form-control" name="phut" placeholder="Số phút" min="0" value="{{$baiviet->time}}" required>
                    </div>
                    <div class="col">
                        <label class="form-control-label">Phút</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col form-control-label"><b>Số người ăn*</b></label>
                    <div class="col">
                        <input type="number" class="form-control" name="songuoian"
                    placeholder="Số người ăn" min="0" value="{{$baiviet->serving}}" required>
                    </div>
                    <div class="col">
                            <label class="form-control-label">Người</label>
                    </div>
                </div>
                <div class="form-group row">
                        <label for="exampleTextarea" class="col-sm-2 form-control-label"><b>Mô tả về món ăn*</b></label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleTextarea" rows="4" name="describe" required >{{$baiviet->describe}}</textarea>
                </div>
                </div>
                <div class="form-group">
                        <label><b>Nguyên liệu*</b></label>
                         <p></p>
                         <div name="add_name" id="add_name">
                             <table class="table table-bordered" id="dynamic_field">
                                    @foreach ( $baiviet->nguyenlieus as  $nl )
                                  <tr id="row{{$baiviet->id}}10{{$nl->id}}">
                                        <td><input type="text" name="names[]" id="name" class="form-control"
                                          placeholder="Tên nguyên liệu" value="{{$nl->name}}" required></td>
                                        <td><input type="text" class="form-control" name="numbers[]" id="number"
                                        placeholder="Số lượng" value="{{$nl->soluong}}" required></td>
                                        <td><i class="fas fa-times remove_nl" id="{{$baiviet->id}}10{{$nl->id}}" onclick="remove_nl({{$baiviet->id}}10{{$nl->id}})"></i></td>
                                        </tr>
                                    @endforeach
                             </table>
                         </div>
                         <a class="btn btn-primary" id="add" onclick="themnguyenlieu()">Thêm nguyên liệu</a>
                </div>
                <div class="form-group">
                    <label><b>Bước thực hiện*</b></label>
                     <p></p>

                     <div name="add_name" id="add_step">
                         <table class="table table-bordered" id="dynamic_field_step">
                             @foreach ( $baiviet->buocthuchiens as $bth )
                         <tr id="row_step{{$bth->id}}{{$baiviet->id}}">
                             <td> <textarea class="form-control" name="motas[]" id="mota" rows="3" required >{{$bth->describe}}</textarea></td>
                             <td><input type="text" hidden value="{{$bth->link_image}}" name="link_image[]" id="link_image">
                                 <input type="file" class="form-control-file" id="hinh_step" name="hinh_steps[]"></td>
                             <td><img src="upload/image_step/{{$bth->link_image}}" width="50px" ></td>
                         <td><i class="fas fa-times remove_step" id="{{$bth->id}}{{$baiviet->id}}" onclick="remove_bth({{$bth->id}}{{$baiviet->id}})"></i></td>
                                </tr>
                             @endforeach
                         </table>
                </div>
                <a class="btn btn-primary" id="add_step_new" onclick="them_bth()" >Thêm bước thực hiện</a>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Thực đơn</b></label>
                        <select class="form-control ls-select2" id="" name="ThucDon">
                              @foreach ( $thucdon as $td )
                               <option @if ($baiviet->thucdon->id==$td->id)
                                    {{"selected"}}
                                @endif value="{{$td->id}}">{{$td->name}}</option>
                              @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Loại món</b></label>
                        <select class="form-control ls-select2" id="" name="LoaiMon">
                            @foreach ( $loaimon as $lm )
                               <option
                               @if($baiviet->loaimon->id==$lm->id)
                               {{"selected"}}
                                @endif
                                 value="{{$lm->id}}">{{$lm->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Nguyên liệu chính</b></label>
                        <select class="form-control ls-select2" id="" name="NguyenLieuChinh">
                            @foreach ( $nguyenlieuchinh as $nlc )
                                <option
                                @if($baiviet->nguyenlieuchinh->id==$nlc->id)
                                {{"selected"}}
                                 @endif
                                 value="{{$nlc->id}}">{{$nlc->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Độ khó</b></label>
                        <select class="form-control ls-select2" id="" name="DoKho">
                            @foreach ( $dokho as $dk )
                                    <option
                                    @if($baiviet->dokho->id==$dk->id)
                                    {{"selected"}}
                                     @endif
                                     value="{{$dk->id}}">{{$dk->name}}</option>
                             @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Ẩm thực</b></label>
                        <select class="form-control ls-select2" id="" name="AmThuc">
                            @foreach ( $amthuc as $at )
                                <option
                                @if($baiviet->amthuc->id==$at->id)
                                {{"selected"}}
                                 @endif
                                value="{{$at->id}}">{{$at->name}}</option>
                             @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="exampleSelect1"><b>Phương pháp nấu</b></label>
                        <select class="form-control  ls-select2" id="" name="PhuongPhap">
                            @foreach ( $phuongphap as $pp )
                                <option
                                @if($baiviet->phuongphap->id==$pp->id)
                                {{"selected"}}
                                 @endif
                                 value="{{$pp->id}}">{{$pp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label><b>Tags</b></label>
                <input type="text" class="form-control" name="tags"
                    placeholder="thịt bò, thịt heo, etc.." value="{{$tg}}">
            </div>
            <button class="btn btn-primary" id="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
