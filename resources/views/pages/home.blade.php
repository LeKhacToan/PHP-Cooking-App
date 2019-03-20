@extends('layout.index')
@section('scripts')
@endsection
@section('content')
<div class="header"  style="background-image:url('upload/image_baiviet/{{$topDay->link_image}}');">
    <div class="monan"><b>Món <br>trong ngày</b></div>
    <div class="label-detail">
        <div class="top-label">
        <a href="baiviet/{{$topDay->id}}" style="text-decoration:none;color:black">
            <h3>{{$topDay->name}}</h3>
            <span>{{substr($topDay->describe,0,250)}}...</span>
            <p><b>{{$topDay->user->name }}</b></p>
        </a>
        </div>
    </div>
</div>

<!--Nội dung trang-->
<div class="can-le">
    <div class="cook-this-week">
        <div class="content">
            <h3><a href="#">What to cook this week</a></h3>
            <p>RECIPES, GUIDES AND MORE FOR THE WEEK OF JANUARY 6TH</p>
        </div>
    </div>
    <!--Danh sách các món trong tuần-->
    <div class="list-cook-week">
        <a href="#" style="text-decoration: none;color: black">
            <h3>Các món ăn được gợi ý</h3>
        </a>
        <h5>Đây là các món được đội ngũ chúng tôi biên tập hàng tuần </h5>
        <div class="list">
            <div class="row justify-content-md-center" id="top_week">
                @foreach ($postWeek as $item)
                <div class="col-md-3">
                        <a href="baiviet/{{$item->id}}" style="text-decoration: none;">
                            <div class="noi-dung">
                                <img src="upload/image_baiviet/{{$item->link_image}}" alt="{{$item->name}}">
                                <div class="content-cook">
                                    <p><b> {{$item->name}}</b></p>
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
    <div class="phan-trang">
        <ul>
            <li><a  class="week">1</a></li>
            <li><a  class="week">2</a></li>
            <li><a  class="week">3</a></li>
        </ul>
        <br>
    </div>
    <br>
    <div class="saveRecap">
        <span class="saveRecap-Icon"></span>
        <p class="zero-header">Save more, get more. Inspiration just for you</p>
        <p>Với những công thức bạn lưu, chúng tôi sẽ đề xuất công thức tương tự mà chúng tôi nghĩ bạn sẽ thích </p>
    </div>
    <!--Danh sách các món ăn mới-->
    <div class="list-new">
        <a href="mon/moi" style="text-decoration: none;color: black">
            <h3>Danh sách các món ăn mới nhất</h3>
        </a>
        <div class="list">
            <div class="row justify-content-md-center" id="id_new_post">
                    @foreach ($newPost as $item)
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
    <div class="phan-trang">
        <ul>
            <li><a class="new_post">1</a></li>
            <li><a class="new_post">2</a></li>
            <li><a class="new_post">3</a></li>
            <li><a class="new_post">4</a></li>
        </ul>
        <br>
    </div>
    <br>
    <!--Danh sách các món được gợi ý-->
    <div class="recomment">
        <a href="#" style="text-decoration: none;color: black">
            <h3>Đề xuất cho bạn</h3>
        </a>
        <div class="row justify-content-md-center">
            @foreach ($random as $item)
            <div class="col">
                    <a href="baiviet/{{$item->id}}" style="text-decoration: none;">
                        <div class="border">
                            <img src="upload/image_baiviet/{{$item->link_image}}" alt="{{$item->name}}">
                            <div class="noidung">
                                <h3>{{$item->name}}</h3>
                                @if(strlen($item->name)<40)
                                <p></p>
                                @endif
                                <div class="save">
                                    <span><i class="far fa-bookmark savePost" id="{{$item->id}}"><span> Lưu công thức</span></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="w-100"></div>
        </div>
    </div>
</div>
@endsection
