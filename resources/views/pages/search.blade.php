@extends('layout.index')
@section('css')
    <link href="{{asset('css/search.css')}}" type="text/css" rel="stylesheet">
@stop
@section('scripts')
   <script>
   </script>
@stop
@section('content')
<div class="can-le">
    <form id="searchForm" method="POST">
        @csrf
            <div class="header-search border" id="id_search">
                    <div class="content">
                        <div class="search-content row">
                            <div class="col-sm-2">
                                <p><b>Ẩm thực:</b></p>
                            </div>
                            <div class="col-sm-10 row">
                                @foreach ($amthuc as $item)
                                <div class="col col-lg-2">
                                        <input type="checkbox" value="{{$item->id}}" name="amthuc[]"><small> {{$item->name}}</small>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <br>
                        <div class="search-content row">
                                <div class="col-sm-2">
                                    <p><b>Thực đơn:</b></p>
                                </div>
                                <div class="col-sm-10 row">
                                    @foreach ($thucdon as $item)
                                    <div class="col col-lg-2">
                                            <input type="checkbox"  value="{{$item->id}}" name="thucdon[]"><small> {{$item->name}}</small>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                        <br>
                        <div class="search-content row">
                                <div class="col-sm-2">
                                    <p><b>Phương pháp:</b></p>
                                </div>
                                <div class="col-sm-10 row">
                                    @foreach ($phuongphap as $item)
                                    <div class="col col-lg-2">
                                            <input type="checkbox" value="{{$item->id}}" name="phuongphap[]"><small> {{$item->name}}</small>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                        <br>
                        <div class="search-content row">
                                <div class="col-sm-2">
                                    <p><b>Loại món:</b></p>
                                </div>
                                <div class="col-sm-10 row">
                                    @foreach ($loaimon as $item)
                                    <div class="col col-lg-2">
                                            <input type="checkbox" value="{{$item->id}}" name="loaimon[]"><small> {{$item->name}}</small>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                        <br>
                        <div class="search-content row">
                                <div class="col-sm-2">
                                    <p><b>Nguyên liệu chính:</b></p>
                                </div>
                                <div class="col-sm-10 row">
                                    @foreach ($nguyenlieuchinh as $item)
                                    <div class="col col-lg-2">
                                            <input type="checkbox" value="{{$item->id}}" name="nguyenlieuchinh[]"><small> {{$item->name}}</small>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                        <br>
                        <div class="search-content row">
                                <div class="col-sm-2">
                                    <p><b>Độ khó:</b></p>
                                </div>
                                <div class="col-sm-10 row">
                                    @foreach ($dokho as $item)
                                    <div class="col col-lg-2">
                                            <input type="checkbox" value="{{$item->id}}" name="dokho[]"><small> {{$item->name}}</small>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>
               </div>
               <br>
             <button type="button" class="btn btn-primary" onclick="addSearch()" name="" id="btn-click">Add</button>
    </form>
    <h2>Result:</h2>
    <div class="content border">
        <div class="row justify-content-md-center" id="id-monan1">
            @foreach ($monan as $item)
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
@endsection
