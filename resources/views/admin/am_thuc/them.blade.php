@extends('admin.layout.index')
@section('content')
<div class="main-content">
    <div class="page-header">
        <h3 class="page-title">Ẩm thực</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Ẩm thực</a></li>
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
            <form id="validateForm" method="POST" action="admin/amthuc/them" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name*</label>
                    <input type="text" class="form-control" name="name"
                           placeholder="Name">
                </div>
                <button class="btn btn-primary" id ="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
