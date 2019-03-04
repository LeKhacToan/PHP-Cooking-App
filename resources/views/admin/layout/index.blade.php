<!DOCTYPE html>
<html>

<head>
    <meta charset = "utf-8">
    <title>Admin</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <script src="{{asset('assets/global/js/core/pace.js')}}"></script>
    <!-- START CORE CSS-->
    <link href="{{asset('assets/global/css/laraspace.css')}}" rel="stylesheet" type="text/css">
    <!-- END CORE CSS -->
    <base href="{{asset('')}}">
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
    <link rel="icon" type="image/png" href="assets/global/img/favicons/android-chrome-192x192.png"
          sizes="192x192">
    <link rel="icon" type="image/png" href="assets/global/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/global/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="assets/global/img/favicons/manifest.json">
    <link rel="mask-icon" href="assets/global/img/favicons/safari-pinned-tab.svg" color="#333333">
    <link rel="shortcut icon" href="assets/global/img/favicons/favicon.ico">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="assets/global/img/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="assets/global/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#333333">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
</head>
<body class="layout-default skin-default">

<div id="app" class="site-wrapper">
   @include('admin.layout.header')
    <div class="mobile-menu-overlay"></div>
   @include('admin.layout.menu')

    @yield('content')


    <footer class="site-footer">
        <div class="text-right">
            Powered by <a href="http://bytefury.com/" target="_blank">Bytefury</a>
        </div>
    </footer>
    <div class="skin-tools">
        <a class="skin-tools-action">
            <i class="icon-fa icon-fa-cog"></i>
        </a>
        <div class="skin-tools-content">
            <h5 class="mt-2">Select Skin</h5>
            <div class="row mt-md-4">
                <div class="col-sm-6 skin-item">
                    <a href="#" class="skin-radio active" data-skin="default" title="Skin - Default">
                        <img src="assets/global/img/skins/skin-default.png" class="img-fluid">
                    </a>
                </div>
                <div class="col-sm-6 skin-item">
                    <a href="#" class="skin-radio" data-skin="tyrell" data-logo="white" title="Skin - Tyrell">
                        <img src="assets/global/img/skins/skin-tyrell.png" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row mt-md-4">
                <div class="col-sm-6 skin-item">
                    <a  class="skin-radio" data-skin="arryn" data-logo="white" title="Skin - Arryn">
                        <img src="assets/global/img/skins/skin-arryn.png" class="img-fluid">
                    </a>
                </div>
                <div class="col-sm-6 skin-item">
                    <a  class="skin-radio" data-skin="lannister" data-logo="white" title="Skin - Lannister">
                        <img src="assets/global/img/skins/skin-lannister.png" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row mt-md-4">
                <div class="col-sm-6 skin-item">
                    <a  class="skin-radio" data-skin="stark" title="Skin - Stark">
                        <img src="assets/global/img/skins/skin-stark.png" class="img-fluid">
                    </a>
                </div>
                <div class="col-sm-6 skin-item">
                    <a  class="skin-radio" data-skin="targaryen" title="Skin - Targaryen">
                        <img src="assets/global/img/skins/skin-targaryen.png" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- START GLOBAL  SCRIPT -->
<script src="{{asset('assets/global/js/core/plugins.js')}}"></script>
<script src="{{asset('assets/global/js/demo/skintools.js')}}"></script>
<!-- END GLOBAL  SCRIPT -->

<!-- START PAGE  SCRIPT -->
<script src="{{asset('assets/plugins/Chartjs/Chart.js')}}"></script>
<script src="{{asset('assets/global/js/core/app.js')}}"></script>
<script src="assets/plugins/datatables/dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="assets/pages/datatables.js"></script>>
@yield('scripts')

<!-- END PAGE  SCRIPT -->


</body>
</html>
