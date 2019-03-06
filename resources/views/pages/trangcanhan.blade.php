@extends('layout.index')
@section('css')
<link href="assets/global/css/laraspace.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/trangcanhan.css">
@stop
@section('scripts')
<script src="assets/global/js/core/pace.js"></script>
<script src="assets/global/js/core/plugins.js"></script>
<script src="assets/global/js/demo/skintools.js"></script>
<script src="assets/plugins/jquery-validate/jquery.validate.js"></script>
<script src="assets/pages/advanced.js"></script>
<script src="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="assets/plugins/select2/select2.js"></script>
<script src="assets/plugins/form-wizard/jquery.steps.js"></script>
<script src="assets/pages/wizard.js"></script>
<script>
    var i=false;
         function clicktb(){
             i=!i;
             document.getElementById("tb_id").style.display=i ?'block':'none';
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
        <div class="noidung-cn">
            <button class="btn btn-primary" onclick="document.getElementById('add-post').style.display='block'">Thêm bài viết</button>
        </div>
        <div class="list">
            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <a href="#" style="text-decoration: none;">
                        <div class="noi-dung">
                            <img src="image/merlin_148844376_aa37e5b5-71b6-4875-8384-80b50c9ee861-articleLarge.jpg" alt="">
                            <div class="content-cook">
                                <p><b>Peruvian Roasted Chicken With Spicy Cilantro Sauce</b></p>
                                <small>By Melissa Clark</small><br>
                                <small>50 minutes</small>
                                <div class="dropdown show">
                                    <a class="dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" style="text-decoration: none;">
                        <div class="noi-dung">
                            <img src="image/merlin_148844376_aa37e5b5-71b6-4875-8384-80b50c9ee861-articleLarge.jpg" alt="">
                            <div class="content-cook">
                                <p><b>Peruvian Roasted Chicken With Spicy Cilantro Sauce</b></p>
                                <small>By Melissa Clark</small><br>
                                <small>50 minutes</small>
                                <div class="dropdown show">
                                    <a class="dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" style="text-decoration: none;">
                        <div class="noi-dung">
                            <img src="image/merlin_148844376_aa37e5b5-71b6-4875-8384-80b50c9ee861-articleLarge.jpg" alt="">
                            <div class="content-cook">
                                <p><b>Peruvian Roasted Chicken With Spicy Cilantro Sauce</b></p>
                                <small>By Melissa Clark</small><br>
                                <small>50 minutes</small>
                                <div class="dropdown show">
                                    <a class="dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" style="text-decoration: none;">
                        <div class="noi-dung">
                            <img src="image/merlin_148844376_aa37e5b5-71b6-4875-8384-80b50c9ee861-articleLarge.jpg" alt="">
                            <div class="content-cook">
                                <p><b>Peruvian Roasted Chicken With Spicy Cilantro Sauce</b></p>
                                <small>By Melissa Clark</small><br>
                                <small>50 minutes</small>
                                <div class="dropdown show">
                                    <a class="dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                        <a href="#" style="text-decoration: none;">
                            <div class="noi-dung">
                                <img src="image/merlin_148844376_aa37e5b5-71b6-4875-8384-80b50c9ee861-articleLarge.jpg" alt="">
                                <div class="content-cook">
                                    <p><b>Peruvian Roasted Chicken With Spicy Cilantro Sauce</b></p>
                                    <small>By Melissa Clark</small><br>
                                    <small>50 minutes</small>
                                    <div class="dropdown show">
                                        <a class="dropdown-toggle"  role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="/toan/deptrai">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
       
</div>


    @include('pages.add-new-post')
@endsection
