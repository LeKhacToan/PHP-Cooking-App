@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="css/baiviet-style.css">
@stop
@section('content')
<p></p>
<br>
<br>
<div class="content-food">
        <div class="content-food-noidung"></div>
        <div class="title-contener">
            <h1>Món ăn xòa thịt bò chán bỏ mẹ</h1>
        </div>
        <div class="name-auther">
            <h5><a href="">Le Khac Toan</a></h5>
        </div>
        <div class="save-class">
            <ul>
                <li><span class="time"><b>Thời gian:  23 phút</b></span> </li>
                <li><span class="time"><b>Xuất ăn cho: 2 người</b></span> </li>
            </ul>
            @if(Auth::check())
                @if(Auth::user()->role==1)
                <div class="dropdown show" id="dropdown">
                        <a class="btn btn-secondary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Action </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Sửa bài viết</a>
                          <a class="dropdown-item" href="#">Xóa bài viết</a>

                        </div>
                      </div>
                @else
                <button class="btn btn-primary" id="save-btn">Lưu bài viết</button>
                @endif
            @endif
        </div>
        <div class="row decription">
            <div class="col-4 decription-content">
                <p>
                    The excellent hamburger at Zuni Café in San Francisco has always been served on a square of toasted
                    rosemary focaccia. The pastry chef Annie Callan offers this house recipe: Scaled to a reasonable
                    size, it is easy to put together and fun to make. Bake it in a 9-by-12-inch rimmed baking sheet for
                    a nice, thick focaccia that can be cut into six 4-inch squares (the trimmings are a delicious
                    snack).
                </p>
                <br>
                <br>
                <div class="tag">
                    <h6>Tags :
                        <a href="">món ăn sáng</a>
                        <a href="">món ăn sáng</a>
                        <a href="">món ăn sáng</a>
                        <a href="">món ăn sáng</a>
                        <a href="">món ăn sáng</a>

                    </h6>
                </div>
            </div>
            <div class="col-8 decription-image">
                <img src="image/merlin_148844376_aa37e5b5-71b6-4875-8384-80b50c9ee861-articleLarge.jpg">
            </div>
        </div>
        <div class="info-rating"  >
            <div class="row  info">
                <div class="col-6 col-md-4 cs">Loai mon</div>
                <div class="col-6 col-md-4 cs" >Thuc don</div>
                <div class="col-6 col-md-4 cs">Nguyen lieu chinh</div>
                <div class="col-6 col-md-4 cs">Am thuc</div>
                <div class="col-6 col-md-4 cs">Phuong phap nau</div>
                <div class="col-6 col-md-4 cs">Do kho</div>
            </div>
            <div class="rate">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <div class="p"></div>
        <div class="row nl-bth">
            <div class="col-6 col-md-4 nl">
                <div class="nl-header">
                    <h3>Nguyên liệu:</h3>
                    <div class="nl-number">
                        <ul>
                            <li>The excellent hamburger at Zuni Café </li>
                            <li>The excellent hamburger at Zuni Café </li>
                            <li>The excellent hamburger at Zuni Café </li>
                            <li>The excellent hamburger at Zuni Café </li>
                            <li>The excellent hamburger at Zuni Café </li>
                            <li>The excellent hamburger at Zuni Café </li>
                            <li>The excellent hamburger at Zuni Café </li>
                            <li>The excellent hamburger at Zuni Café </li>
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
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Bình luận</button>
                        </div>
                    </div>
                    <div class="noidung-comment">
                        <div class="row nguoidung">
                            <img class="col-sm-2" src="upload/anhbia.png" style="width:30px;height:30px; border-radius:50%">
                            <div class="col cmt">
                                <span><a href="#">lekhactoan</a> noi dung com mnen nene dddddddddddddddd</span>
                            </div>

                        </div>
                        <div class="row nguoidung">
                            <img class="col-sm-2" src="upload/anhbia.png" style="width:30px;height:30px; border-radius:50%">
                            <div class="col cmt">
                                <span><a href="#">lekhactoan</a>noi dung com mne nnene dddddddddddddddd</span>
                            </div>

                        </div>
                        <div class="row nguoidung">
                            <img class="col-sm-2" src="upload/anhbia.png" style="width:30px;height:30px; border-radius:50%">
                            <div class="col cmt">
                                <span><a href="#">lekhactoan</a> noi dung com mnen nene dddddddddddddddd</span>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="col-12 col-md-8 bth">
                <h3>Bước thực hiện:</h3>
                <div class="bth-first">
                    <div class="bth-number">
                        <h4>Step 1</h4>
                        <div class="bth-content">
                            <p>
                                The excellent hamburger at Zuni Café in San Francisco has always been served on a
                                square of
                                toasted
                                rosemary focaccia. The pastry chef Annie Callan offers this house recipe: Scaled to a
                                reasonable
                                size, it is easy to put together and fun to make. Bake it in a 9-by-12-inch rimmed
                                baking
                                sheet for
                                a nice, thick focaccia that can be cut into six 4-inch squares (the trimmings are a
                                delicious
                                snack).
                            </p>
                            <img src="upload/anhbia.png">
                        </div>
                    </div>
                    <div class="bth-number">
                        <h4>Step 2</h4>
                        <div class="bth-content">
                            <p>
                                The excellent hamburger at Zuni Café in San Francisco has always been served on a
                                square of
                                toasted
                                rosemary focaccia. The pastry chef Annie Callan offers this house recipe: Scaled to a
                                reasonable
                                size, it is easy to put together and fun to make. Bake it in a 9-by-12-inch rimmed
                                baking
                                sheet for
                                a nice, thick focaccia that can be cut into six 4-inch squares (the trimmings are a
                                delicious
                                snack).
                            </p>
                            <img src="upload/anhbia.png">
                        </div>
                    </div>
                    <div class="bth-number">
                        <h4>Step 3</h4>
                        <div class="bth-content">
                            <p>
                                The excellent hamburger at Zuni Café in San Francisco has always been served on a
                                square of
                                toasted
                                rosemary focaccia. The pastry chef Annie Callan offers this house recipe: Scaled to a
                                reasonable
                                size, it is easy to put together and fun to make. Bake it in a 9-by-12-inch rimmed
                                baking
                                sheet for
                                a nice, thick focaccia that can be cut into six 4-inch squares (the trimmings are a
                                delicious
                                snack).
                            </p>
                            <img src="upload/anhbia.png">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="list-new">
                <a href="#" style="text-decoration: none;color: black">
                    <h5>Cùng chủ đề:</h5>
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

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
        <div class="list-new">
                <a href="#" style="text-decoration: none;color: black">
                    <h5>Bài viết được gợi ý:</h5>
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

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </div>

    </div>
@endsection
