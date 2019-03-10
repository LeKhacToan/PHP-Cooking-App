@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/trangcanhan.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
@stop
@section('scripts')
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script>
    var a=false;
         function clicktb(){
             a=!a;
             document.getElementById("tb_id").style.display=a ?'block':'none';
         }
     var postForm = document.getElementById("add-post");
        window.onclick = function () {
            if (event.target == postForm) {
                postForm.style.display = "none";
            }
        }
</script>
@stop
@section('content')
<div class="wrapper">
        <div class="wrapper-cn">
           @include('pages.person-header')
        </div>
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
        @if(Auth::check())
           @if(Auth::user()->id==$user->id)
           <div class="noidung-cn">
                <button class="btn btn-primary" onclick="document.getElementById('add-post').style.display='block'">Thêm bài viết</button>
            </div>
            @else
            <div class="noidung-cn">
            </div>
           @endif
        @else
        <div class="noidung-cn">
        </div>
        @endif
        <div class="list">
            <div class="row justify-content-md-center">
                {{-- kiem tra dang nhap --}}
            @if(Auth::check())
                @if(Auth::user()->id==$user->id)
                  @if($user->baiviets->count()==0)
                  <p>Không có bài viết</p>
                  @else
                  @foreach ($user->baiviets as $item)
                 <div class="col-md-3">
                         <a href="baiviet/{{$item->id}}" style="text-decoration: none;">
                             <div class="noi-dung">
                                 <img src="upload/image_baiviet/{{$item->link_image}}" alt="">
                                 <div class="content-cook">
                                     <p><b>{{$item->name}}</b></p>
                                     <small> by {{$item->user->name}}</small><br>
                                     <small>{{$item->time}} phút</small>
                                     <div class="dropdown show">
                                         <a class="dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                             aria-haspopup="true" aria-expanded="false">
                                         </a>
                                         <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                             <a class="dropdown-item" href="sua/baiviet/{{$item->id}}">Edit</a>
                                             <a class="dropdown-item" href="xoa/baiviet/{{$item->id}}">Delete</a>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </a>
                     </div>
                  @endforeach
                 @endif
                 {{-- khong la nguoi dung --}}
                 @else
                 @if($user->baiviets->count()==0)
                 <p>Không có bài viết</p>
                 @else
                 @foreach ($user->baiviets as $item)
                <div class="col-md-3">
                        <a href="baiviet/{{$item->id}}" style="text-decoration: none;">
                            <div class="noi-dung">
                                <img src="upload/image_baiviet/{{$item->link_image}}" alt="">
                                <div class="content-cook">
                                    <p><b>{{$item->name}}</b></p>
                                    <small> by {{$item->user->name}}</small><br>
                                    <small>{{$item->time}} phút</small>

                                    <div class="save">
                                        <span><i class="far fa-bookmark"></i></span>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </a>
                    </div>
                 @endforeach
                @endif
                 @endif
            @else
            @if($user->baiviets->count()==0)
            <p>Không có bài viết</p>
            @else
            @foreach ($user->baiviets as $item)
           <div class="col-md-3">
                   <a href="baiviet/{{$item->id}}" style="text-decoration: none;">
                       <div class="noi-dung">
                           <img src="upload/image_baiviet/{{$item->link_image}}" alt="">
                           <div class="content-cook">
                               <p><b>{{$item->name}}</b></p>
                               <small>by {{$item->user->name}}</small><br>
                               <small>{{$item->time}} phút</small>
                               <div class="save">
                                    <span><i class="far fa-bookmark"></i></span>
                                </div>
                                <br>
                           </div>
                       </div>
                   </a>
               </div>
            @endforeach
           @endif
            @endif
            </div>
        </div>
</div>
    @if(Auth::check())
      @if(Auth::user()->id==$user->id)
      @include('pages.add-new-post')
      @endif
    @endif
@endsection
