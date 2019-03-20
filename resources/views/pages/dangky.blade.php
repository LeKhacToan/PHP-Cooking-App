<!DOCTYPE html>
<html>

<head>
    <meta charset = "utf-8">
    <title>Dang ky</title>
    <!-- START CORE CSS-->
    <link href="assets/global/css/laraspace.css" rel="stylesheet" type="text/css">
    <!-- END CORE CSS -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="ju0AJjtVlV2LnL9lhkK9fOpg7DhuaMFVgR1mifUv">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/global/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/global/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/global/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/global/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/global/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/global/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/global/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/global/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/global/img/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="assets/global/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/global/img/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="assets/global/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/global/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="assets/global/img/favicons/manifest.json">
    <link rel="mask-icon" href="assets/global/img/favicons/safari-pinned-tab.svg" color="#333333">
    <link rel="shortcut icon" href="assets/global/img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="assets/global/img/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="assets/global/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#333333">
</head>
<body class="login-page login-3">

<div id="app" class="site-wrapper">
    <div class="login-box">
        <div class="box-wrapper">
            <div class="logo-main">
                <a href="/"><img src="assets/global/img/logo-login.png" alt="Laraspace Logo"></a>
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
            <form action="dangky" id="" method="post">
                @csrf
                <div class="form-group">
                        <input type="text" class="form-control form-control-danger" placeholder="Your name" name="name">
                    </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-danger" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-danger" placeholder="Enter Password"
                           name="password">
                </div>
                <div class="form-group">
                        <input type="password" class="form-control form-control-danger" placeholder=" Password"
                               name="password_confirmation">
                    </div>
                <div class="other-actions row">
                    <div class="col-6">
                    </div>
                </div>
                <button class="btn btn-theme btn-full">Đăng ký</button>
                <div class="form-group other-options">
                    <div class="social-caption pull-left">
                        <h6>
                            Or Login With
                        </h6>
                    </div>
                    <div class="social-icons pull-right">
                        <a href="../auth/facebook.html" class="btn btn-default text-primary btn-icon"><i
                                class="icon-fa icon-fa-facebook"></i></a>
                        <a href="../auth/google.html" class="btn btn-default text-danger btn-icon"><i
                                class="icon-fa icon-fa-google"></i></a>
                        <a href="../auth/github.html" class="btn btn-default btn-icon text-default"><i
                                class="icon-fa icon-fa-github"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="content-box">
        <h1><b>Headstart</b> your project in <br>
            Just 5 minutes.
        </h1>
    </div>
</div>
<!-- START GLOBAL  SCRIPT -->
<script src="assets/global/js/core/plugins.js"></script>
<!-- END GLOBAL  SCRIPT -->
<script src="assets/pages/sessions/login.js"></script>
</body>
</html>
