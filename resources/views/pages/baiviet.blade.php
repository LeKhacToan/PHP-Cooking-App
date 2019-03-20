@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/baiviet-style.css')}}">
@stop
@section('scripts')
@endsection
@section('content')
<br>
<div class="content-food ">
        <div class="content-food-noidung"></div>
        <div class="title-contener">
            <h1>{{$baiviet->name}}</h1>
        </div>
        <div class="name-auther">
            <h5><a href="trangcanhan/{{$baiviet->user->id}}">By {{$baiviet->user->name}}</a></h5>
        </div>
        <div class="save-class">
            <ul>
                <li><span class="time"><b>Thời gian:  {{$baiviet->time}} phút</b></span> </li>
                <li><span class="time"><b>Xuất ăn cho: {{$baiviet->serving}} người</b></span> </li>
            </ul>
            @if(Auth::check())
                @if(Auth::user()->role==1||Auth::user()->id==$baiviet->user->id)
                <div class="dropdown show" id="dropdown">
                        <a class="btn btn-secondary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Action </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="baiviet/sua/{{$baiviet->id}}">Sửa bài viết</a>
                          <a class="dropdown-item" href="baiviet/xoa/{{$baiviet->id}}">Xóa bài viết</a>
                        </div>
                      </div>
                @else
                <button class="btn btn-primary savePost save-btn" id="{{$baiviet->id}}">Lưu bài viết</button>
                @endif
            @endif
        </div>
        <div class="row decription">
            <div class="col-4 decription-content">
                <span>
                    {{$baiviet->describe}}
                </span>
                <br>
                <br>
                <br>
                <br>
                <div class="tag">
                    <h6>Tags :
                        @foreach ( $baiviet->tags as $tag )
                        <a href="">{{$tag->name}}</a>
                        @endforeach
                    </h6>
                </div>
            </div>
            <div class="col-8 decription-image">
                <img src="upload/image_baiviet/{{$baiviet->link_image}}" style="border-radius:4px">
            </div>
        </div>
        <div class="info-rating"  >
            <div class="row  info">
                <div class="col-6 col-md-4 cs">Loại món: {{$baiviet->loaimon->name}} </div>
                <div class="col-6 col-md-4 cs" >Thực đơn: {{$baiviet->thucdon->name}} </div>
                <div class="col-6 col-md-4 cs">Ẩm thực: {{$baiviet->amthuc->name}} </div>
                <div class="col-6 col-md-4 cs">Nguyên liệu chính: {{$baiviet->nguyenlieuchinh->name}} </div>
                <div class="col-6 col-md-4 cs">Phương pháp nấu: {{$baiviet->phuongphap->name}} </div>
                <div class="col-6 col-md-4 cs">Độ khó: {{$baiviet->dokho->name}} </div>
            </div>
            <div class="rate">
                <span class="fa fa-star @if($sum>=1) checked @endif" onclick="rate(1,{{$baiviet->id}})"  id="1"></span>
                <span class="fa fa-star @if($sum>=2) checked @endif "onclick="rate(2,{{$baiviet->id}})" id="2"></span>
                <span class="fa fa-star @if($sum>=3) checked @endif " onclick="rate(3,{{$baiviet->id}})" id="3"></span>
                <span class="fa fa-star @if($sum>=4) checked @endif" onclick="rate(4,{{$baiviet->id}})" id="4"></span>
                <span class="fa fa-star @if($sum>=5) checked @endif" onclick="rate(5,{{$baiviet->id}})" id="5"></span>
                <br>
                <small>Số lượng: {{$rate}} Điểm:{{round($sum,2)}}/5</small>

            </div>
        </div>
        <div class="p"></div>
        <div class="row nl-bth">
            <div class="col-6 col-md-4 nl">
                <div class="nl-header">
                    <h3>Nguyên liệu:</h3>
                    <div class="nl-number">
                        <ul>
                            @foreach ( $baiviet->nguyenlieus as $nl )
                            <li>{{$nl->soluong}} {{$nl->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <br>
                <div class="pc">
                </div>
                <div class="comment">
                    <h3>Bình luận:</h3>
                    <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nhập bình luận" aria-label="Nhập bình luận"
                                aria-describedby="basic-addon2" id="ipComment">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="addComment" onclick="postCmt({{$baiviet->id}})" @if(!Auth::check()) disabled @endif>Bình luận</button>
                            </div>
                    </div>
                    <div class="noidung-comment" id="newComment">
                        @foreach ($baiviet->binhluans as $binhluan )
                        <div class="row nguoidung">
                                <img class="col-sm-2" src="upload/avatar/{{$binhluan->user->avatar}}" style="width:30px;height:30px; border-radius:50%">
                                <div class="col cmt">
                                    <span><a href="trangcanhan/{{$binhluan->user->id}}">{{$binhluan->user->name}}</a> {{$binhluan->content}}</span>
                                </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-8 bth">
                <h3>Bước thực hiện:</h3>
                <div class="bth-first">
                     @foreach ($baiviet->buocthuchiens as $i=> $buocthuchien )
                     <div class="bth-number">
                            <h5>Bước {{$i+1}}:</h5>
                            <div class="bth-content">
                                <p>
                                    {{$buocthuchien->describe}}
                                </p>
                                <img src="upload/image_step/{{$buocthuchien->link_image}}" width="80%" height="400em" style="border-radius:4px">
                            </div>
                        </div>
                     @endforeach
                </div>
            </div>
        </div>
        <div class="list-new">
                <a href="#" style="text-decoration: none;color: black">
                    <h5>Cùng chủ đề:</h5>
                </a>
                <div class="list">
                    <div class="row justify-content-md-center">
                        @foreach ($random as $item)
                        <div class="col-md-3">
                                <a href="baiviet/{{$item->id}}" style="text-decoration: none;">
                                    <div class="noi-dung">
                                        <img src="upload/image_baiviet/{{$item->link_image}}" alt="{{$item->name}}">
                                        <div class="content-cook">
                                            <p><b>{{$item->name}}</b></p>
                                            <small>By {{$item->user->name}}</small><br>
                                            <small>{{$item->time}} minutes</small>
                                            <i class="far fa-bookmark savePost" id="{{$item->id}}"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
        </div>
        <div class="list-new">
                <a href="#" style="text-decoration: none;color: black">
                    <h5>Có thể bạn thích:</h5>
                </a>
                <div class="list">
                    <div class="row justify-content-md-center">
                            @foreach ($random1 as $item)
                            <div class="col-md-3">
                                    <a href="baiviet/{{$item->id}}" style="text-decoration: none;">
                                        <div class="noi-dung">
                                            <img src="upload/image_baiviet/{{$item->link_image}}" alt="{{$item->name}}">
                                            <div class="content-cook">
                                                <p><b>{{$item->name}}</b></p>
                                                <small>By {{$item->user->name}}</small><br>
                                                <small>{{$item->time}} minutes</small>
                                                <i class="far fa-bookmark savePost" id="{{$item->id}}"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                    </div>
             </div>
        </div>
    </div>
@endsection
