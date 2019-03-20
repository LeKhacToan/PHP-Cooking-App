@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/monmoi.css')}}">

@endsection
@section('content')
<div class="wrapper" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(image/02COOKING_PORKCHOPS1-articleLarge.jpg);"></div>
   <div class="tieu-de">
        <h1>Goobye junk food.<br>Hello super healthy meals.</h1>
    </div>
    <div class="mon-moi-content">
            <h3>Danh sách các món ăn mới</h3>
            <div class="row justify-content-md-center" id="list_id">
                @foreach ($monan as $item)
                <div class="col-md-3">
                        <a href="baiviet/{{$item->id}}" style="text-decoration: none;">
                            <div class="noi-dung">
                                <img src="upload/image_baiviet/{{$item->link_image}}" alt="{{$item->name}}">
                                <div class="content-cook">
                                    <p><b>{{$item->name}}</b></p>
                                    <small>By {{$item->user ->name}}</small><br>
                                    <small>{{$item->time}} minutes</small>
                                    <i class="far fa-bookmark savePost" id="{{$item->id}}"></i>
                                </div>
                            </div>
                        </a>
                </div>
                @endforeach
            </div>
            <br>
            <button class="btn btn-dark btn-sm listnew_class" >Xem thêm</button>
        </div>
@endsection
