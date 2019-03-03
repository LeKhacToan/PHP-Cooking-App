@extends('admin.layout.index')
@section('content')
<div class="main-content">
    <div class="page-header">
        <h3 class="page-title">Users</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Users</a></li>
            <li class="breadcrumb-item active">New user</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-header">
            <h6>New user</h6>
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
            <form id="validateForm" method="POST" action="admin/user/them" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Email address*</label>
                    <input type="email" class="form-control" name="email"
                           placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Username*</label>
                    <input type="text" class="form-control" name="username"
                           placeholder="Username">
                </div>
                <div class="form-group">
                    <label>Ngày sinh</label>
                    <div class="input-group">
                         <span class="input-group-addon">
                            <i class="icon-fa icon-fa-calendar"></i>
                            </span>
                            <input type="text" class="form-control ls-datepicker" value="" name="ngay_sinh">
                    </div>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                            <input type="radio" name="gioi_tinh" id="inlineRadio1" value="0" checked>
                            Nam
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gioi_tinh" id="inlineRadio2" value="1">
                            Nữ
                        </label>
            </div>
                <div class="form-group">
                    <label>Biệt danh</label>
                    <input type="text" class="form-control" name="nick_name"
                               placeholder="Nick name">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Mô tả về bạn</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3" name="decription"></textarea>
                    </div>
                <div class="form-group">
                    <label>Password*</label>
                    <input type="password" class="form-control" name="password" id="password"
                           placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Retype Password*</label>
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="Password">
                </div>

                <div class="form-group">
                        <label class="radio-inline">
                                <input type="radio" name="quyen" id="inlineRadio1" value="0" checked>
                                Người dùng
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="quyen" id="inlineRadio2" value="1">
                                Admin
                            </label>
                </div>
                <div class="form-group">
                        <label>Block</label>
                        <input type="checkbox" class="ls-switch" name="block"/>
                </div>
                <div class="form-group">
                            <label>Block comment</label>
                            <input type="checkbox" class="ls-switch" name="block_cmt"/>
                </div>

                <div class="form-group">
                        <label for="exampleInputFile">Avatar</label>
                        <input type="file" class="form-control-file" id="exampleInputFile" name="avatar">
                        <small class="text-muted">Thêm hình ảnh mọi người sẽ thấy avatar của bạn.
                        </small>
                </div>
                <div class="form-group">
                        <label for="exampleInputFile">Ảnh bìa</label>
                        <input type="file" class="form-control-file" id="exampleInputFile" name="anh_bia">
                        <small class="text-muted">Thêm hình ảnh mọi người sẽ thấy ảnh bìa của bạn.
                        </small>
                </div>
                <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" class="form-control" name="link_facebook"
                                   placeholder="Link facebook">
                    </div>
                    <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" name="link_twitter"
                                       placeholder="Link twitter">
                        </div>
                        <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" class="form-control" name="link_instagram"
                                   placeholder="Link instagram">
                    </div>

                <button class="btn btn-primary" id ="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
