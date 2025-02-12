<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/home-style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        @yield('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <base href="{{asset('')}}">
    <script
    src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Trang chủ</title>
</head>

<body>
    <!--Thanh navbar-->
    <nav class="navbar  navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="/">Bamboo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                    <a class="nav-link" href="mon/moi">Món mới<span class="sr-only">(current)</span></a>
                  </li>
            @if (Auth::check())
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if (Auth::user()->role==1)
                    <a class="dropdown-item" href="admin/baiviet/danhsach">Admin space</a>
                    @endif
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="trangcanhan/{{Auth::user()->id}}">Trang cá nhân</a>
                  <a class="dropdown-item" href="logout">Logout</a>
                </div>
              </li>
            @else
               <li class="nav-item">
                    <a class="nav-link" onclick="document.getElementById('id-login').style.display='block'" style="width:auto;">Đăng nhập</a>
                  </li>
            @endif
          </ul>
          <form class="form-inline my-2 my-lg-0" action="search" method="POST">
              @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="tenmonan">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
     <!--Form login-->
     @if(!Auth::check())
         @include('layout.login')
     @endif

    @yield('content')
    <!--footer trang web -->
    <div class="footer"></div>
    <script>
        var loginForm = document.getElementById("id-login");
        window.onclick = function () {
            if (event.target == loginForm) {
                loginForm.style.display = "none";
            }
        }
    </script>
</body>
@yield('scripts')
<script src="{{asset('js/savepost.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
