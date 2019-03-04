@extends('admin.layout.index')
@section('scripts')
@stop
@section('content')
<div class="main-content">
    <div class="page-header">
        <h3 class="page-title">Bài viết</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard/basic.html">Admin</a></li>
            <li class="breadcrumb-item"><a href="users.html">Bài viết</a></li>
            <li class="breadcrumb-item active">Danh sách</li>
        </ol>
        <div class="page-actions">
            <a href="admin/baiviet/them" class="btn btn-primary"><i class="icon-fa icon-fa-plus"></i>Thêm bài viết</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h6>Danh sách</h6>
                </div>
                <div class="card-body" >
                    @if (session('thongbao'))
                 <div class="alert alert-success">
                     {{session('thongbao')}}
                   </div>
                 @endif
                    <table id="responsive-datatable" class="table table-striped table-bordered table-hover" style="width:100%" cellspacing="0">
                        <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Hình ảnh</th>
                            <th>Mô tả</th>
                            <th>Thời gian thực hiện</th>
                            <th>Số người ăn</th>
                            <th>Người tạo</th>
                            <th>Thực đơn</th>
                            <th>Loại món</th>
                            <th>Nguyên liệu chính</th>
                            <th>Độ khó</th>
                            <th>Ẩm thực</th>
                            <th>Phương pháp nấu</th>
                            <th>Top day</th>
                            <th>Top week</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Hình ảnh</th>
                            <th>Mô tả</th>
                            <th>Thời gian thực hiện</th>
                            <th>Số người ăn</th>
                            <th>Người tạo</th>
                            <th>Thực đơn</th>
                            <th>Loại món</th>
                            <th>Nguyên liệu chính</th>
                            <th>Độ khó</th>
                            <th>Ẩm thực</th>
                            <th>Phương pháp nấu</th>
                            <th>Top day</th>
                            <th>Top week</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                             @foreach ($baiviet as $bv )
                             <tr >
                                <th>{{$bv->id}}</th>
                                <th>{{$bv->name}}</th>
                                <th><p><img src="upload/image_baiviet/{{$bv->link_image}}" width="100px"/></p></th>
                                <th>{{ str_limit($bv->describe, $limit = 30, $end = '...') }}</th>
                                <th>{{$bv->time}}</th>
                                <th>{{$bv->serving}}</th>
                                <th>{{$bv->user->name}}</th>
                                <th>{{$bv->thucdon->name}}</th>
                                <th>{{$bv->loaimon->name}}</th>
                                <th>{{$bv->nguyenlieuchinh->name}}</th>
                                <th></th>
                                <th>{{$bv->amthuc->name}}</th>
                                <th>{{$bv->phuongphap->name}}</th>
                                <th> <input type="checkbox" class="ls-switch" name="top_day" @if($bv->top_day) checked="true" @endif/></th>
                                <th> <input type="checkbox" class="ls-switch" name="top_week" @if($bv->top_week) checked="true" @endif></th>
                                <td><a href="admin/baiviet/sua/{{$bv->id}}" class="btn btn-default btn-sm"><i
                                    class="icon-fa icon-fa-magic"></i>Edit</a>
                                    <a href="admin/baiviet/chitiet/{{$bv->id}}" class="btn btn-default btn-sm"><i
                                        class="icon-fa icon-fa-info-circle"></i>Chi tiết</a>
                                  <a href="admin/baiviet/xoa/{{$bv->id}}" class="btn btn-default btn-sm"
                                   data-token="ju0AJjtVlV2LnL9lhkK9fOpg7DhuaMFVgR1mifUv" data-delete
                                   data-confirmation="notie"> <i class="icon-fa icon-fa-trash"></i> Delete</a></td>
                            </tr>
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
