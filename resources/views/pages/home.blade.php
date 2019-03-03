@extends('layout.index')
@section('content')
<div class="header">

    <div class="monan"><b>Món <br>trong ngày</b></div>
    <div class="label-detail">
        <div class="top-label">
            <h3>Orecchiette With Nduja,Shrimp and Tomatoes</h3>
            <span>Chile-spiked,cured pork sausage lends heat to this arrabiata-style sauce.</span>
            <p><b>Yewande Komolafe</b></p>
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
            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <a href="#" style="text-decoration: none;">
                        <div class="noi-dung">
                            <img src="image/09gumborex1-articleLarge.jpg" alt="">
                            <div class="content-cook">
                                <p><b>Peruvian Roasted Chicken With Spicy Cilantro Sauce</b></p>
                                <small>By Melissa Clark</small><br>
                                <small>50 minutes</small>
                                <i class="far fa-bookmark"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" style="text-decoration: none;">
                        <div class="noi-dung">
                            <img src="image/merlin_146806653_43c09c3c-dcc6-42b6-ac62-409d4bde8577-articleLarge.jpg" alt="">
                            <div class="content-cook">
                                <p><b>Peruvian Roasted Chicken With Spicy Cilantro Sauce</b></p>
                                <small>By Melissa Clark</small><br>
                                <small>50 minutes</small>
                                <i class="far fa-bookmark"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" style="text-decoration: none;">
                        <div class="noi-dung">
                            <img src="image/merlin_148112625_06531f26-fdb9-44ba-a793-b7066fac8acf-articleLarge.jpg" alt="">
                            <div class="content-cook">
                                <p><b>Peruvian Roasted Chicken With Spicy Cilantro Sauce</b></p>
                                <small>By Melissa Clark</small><br>
                                <small>50 minutes</small>
                                <i class="far fa-bookmark"></i>
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
                                <i class="far fa-bookmark"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="phan-trang">
        <ul>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
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
        <a href="#" style="text-decoration: none;color: black">
            <h3>Danh sách các món ăn mới nhất</h3>
        </a>
        <div class="list">
            <div class="row justify-content-md-center">
                <div class="col-md-3">
                    <a href="#" style="text-decoration: none;">
                        <div class="noi-dung">
                            <img src="image/09gumborex1-articleLarge.jpg" alt="">
                            <div class="content-cook">
                                <p><b>Peruvian Roasted Chicken With Spicy Cilantro Sauce</b></p>
                                <small>By Melissa Clark</small><br>
                                <small>50 minutes</small>
                                <i class="far fa-bookmark"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" style="text-decoration: none;">
                        <div class="noi-dung">

                            <img src="image/merlin_146806653_43c09c3c-dcc6-42b6-ac62-409d4bde8577-articleLarge.jpg" alt="">
                            <div class="content-cook">
                                <p><b>Peruvian Roasted Chicken With Spicy Cilantro Sauce</b></p>
                                <small>By Melissa Clark</small><br>
                                <small>50 minutes</small>
                                <i class="far fa-bookmark"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" style="text-decoration: none;">
                        <div class="noi-dung">
                            <img src="image/merlin_148112625_06531f26-fdb9-44ba-a793-b7066fac8acf-articleLarge.jpg" alt="">
                            <div class="content-cook">
                                <p><b>Peruvian Roasted Chicken With Spicy Cilantro Sauce</b></p>
                                <small>By Melissa Clark</small><br>
                                <small>50 minutes</small>
                                <i class="far fa-bookmark"></i>
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
                                <i class="far fa-bookmark"></i>
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
                                <i class="far fa-bookmark"></i>
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
                                <i class="far fa-bookmark"></i>
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
                                <i class="far fa-bookmark"></i>
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
                                <i class="far fa-bookmark"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="phan-trang">
        <ul>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
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
            <div class="col">
                <a href="#" style="text-decoration: none;">
                    <div class="border">
                        <img src="image/merlin_146806653_43c09c3c-dcc6-42b6-ac62-409d4bde8577-articleLarge.jpg" alt="">
                        <div class="noidung">
                            <h3>Peruvian Roasted Chicken With Spicy Cilantro Sauce</h3>
                            <div class="save">
                                <span><i class="far fa-bookmark"></i></span>
                                <span>Lưu công thức</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" style="text-decoration: none;">
                    <div class="border">
                        <img src="image/merlin_146806653_43c09c3c-dcc6-42b6-ac62-409d4bde8577-articleLarge.jpg" alt="">
                        <div class="noidung">
                            <h3>Peruvian Roasted Chicken With Spicy Cilantro Sauce</h3>
                            <div class="save">
                                <span><i class="far fa-bookmark"></i></span>
                                <span>Lưu công thức</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <a href="#" style="text-decoration: none;">
                    <div class="border">
                        <img src="image/merlin_146806653_43c09c3c-dcc6-42b6-ac62-409d4bde8577-articleLarge.jpg" alt="">
                        <div class="noidung">
                            <h3>Peruvian Roasted Chicken With Spicy Cilantro Sauce</h3>
                            <div class="save">
                                <span><i class="far fa-bookmark"></i></span>
                                <span>Lưu công thức</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" style="text-decoration: none;">
                    <div class="border">
                        <img src="image/merlin_146806653_43c09c3c-dcc6-42b6-ac62-409d4bde8577-articleLarge.jpg" alt="">
                        <div class="noidung">
                            <h3>Peruvian Roasted Chicken With Spicy Cilantro Sauce</h3>
                            <div class="save">
                                <span><i class="far fa-bookmark"></i></span>
                                <span>Lưu công thức</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <a href="#" style="text-decoration: none;">
                    <div class="border">
                        <img src="image/merlin_146806653_43c09c3c-dcc6-42b6-ac62-409d4bde8577-articleLarge.jpg" alt="">
                        <div class="noidung">
                            <h3>Peruvian Roasted Chicken With Spicy Cilantro Sauce</h3>
                            <div class="save">
                                <span><i class="far fa-bookmark"></i></span>
                                <span>Lưu công thức</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" style="text-decoration: none;">
                    <div class="border">
                        <img src="image/merlin_146806653_43c09c3c-dcc6-42b6-ac62-409d4bde8577-articleLarge.jpg" alt="">
                        <div class="noidung">
                            <h3>Peruvian Roasted Chicken With Spicy Cilantro Sauce</h3>
                            <div class="save">
                                <span><i class="far fa-bookmark"></i></span>
                                <span>Lưu công thức</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
