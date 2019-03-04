<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/home-style.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <base href="{{asset('')}}">
    <title>Home</title>
</head>

<body>
    <!--Thanh navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            @if (Auth::check())
              <li class="nav-item active">
                    <a class="nav-link" href="logout">Logout<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                    <a class="nav-link" href="#"> {{ Auth::user()->name }}<span class="sr-only">(current)</span></a>
              </li>
              @if (Auth::user()->role==1)
              <li class="nav-item active">
                <a class="nav-link" href="admin/baiviet/them">Admin<span class="sr-only">(current)</span></a>
               </li>
              @endif
            @else
               <li class="nav-item">
                    <a class="nav-link" onclick="document.getElementById('id-login').style.display='block'" style="width:auto;">Đăng nhập</a>
                  </li>
            @endif
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
     <!--Form login-->
    @include('layout.login')

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

</html>
