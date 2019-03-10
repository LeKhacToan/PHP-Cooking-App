@extends('admin.layout.index')
@section('scripts')
@endsection
@section('content')
<div class="main-content">
    <div class="page-header">
        <h3 class="page-title">Users</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard/basic.html">Admin</a></li>
            <li class="breadcrumb-item"><a href="users.html">Users</a></li>
            <li class="breadcrumb-item active">Danh sách</li>
        </ol>
        <div class="page-actions">
            <a href="admin/user/them" class="btn btn-primary"><i class="icon-fa icon-fa-plus"></i> New User</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h6>Danh sách user</h6>
                </div>
                <div class="card-body">
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                          </div>
                        @endif
                    <table id="responsive-datatable" class="table table-striped table-bordered table-hover" style="width:100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Biệt danh</th>
                            <th>Mô tả</th>
                            <th>Quyền</th>
                            <th>Block</th>
                            <th>Block comment</th>
                            <th>Avatar</th>
                            <th>Ảnh bìa</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>Instagram</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Biệt danh</th>
                            <th>Mô tả</th>
                            <th>Quyền</th>
                            <th>Block</th>
                            <th>Block comment</th>
                            <th>Avatar</th>
                            <th>Ảnh bìa</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>Instagram</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                         @foreach ( $user as $us )
                         <tr>
                            <td>{{$us->name}}</td>
                            <td>{{$us->email}}</td>
                            <td>{{$us->ngay_sinh}}</td>
                            @if($us->sex==0)
                            <td>Nam</td>
                            @else
                             <td>Nữ</td>
                            @endif
                            <td>{{$us->nick_name}}</td>
                            <td>{{$us->decription}}</td>
                            @if($us->role==0)
                            <td>Nguoi dung</td>
                            @else
                             <td>Admin</td>
                            @endif
                            <td><input type="checkbox" class="ls-switch" name="block" @if($us->block==1) checked @endif/></td>
                            <td><input type="checkbox" class="ls-switch" name="block" @if($us->block_comment==1) checked @endif/></td>
                            <td>@if($us->avatar!="") <img src="upload/avatar/{{$us->avatar}}" width="50px"> @else <img src="upload/anhbia.png" width="50px"> @endif</td>
                            <td>@if($us->anh_bia!="") <img src="upload/anhbia/{{$us->anh_bia}}" width="50px"> @else <img src="upload/anhbia.png" width="50px"> @endif</td>
                            <td>{{$us->link_facebook}}</td>
                            <td>{{$us->link_twitter}}</td>
                            <td>{{$us->link_instagram}}</td>
                            <td><a href="admin/user/sua/{{$us->id}}" class="btn btn-default btn-sm"><i
                                class="icon-fa icon-fa-search"></i>Edit</a>
                              <a href="admin/user/xoa/{{$us->id}}" class="btn btn-default btn-sm"
                               data-token="ju0AJjtVlV2LnL9lhkK9fOpg7DhuaMFVgR1mifUv" data-delete
                               data-confirmation="notie"> <i class="icon-fa icon-fa-trash"></i> Delete</a></td>
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
