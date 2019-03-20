<div>
        <form id="validateForm" method="POST" action="user/sua/{{$user->id}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Email address*</label>
                <input type="email" class="form-control" name="email"
                       placeholder="Email" value="{{$user->email}}" disabled >
            </div>
            <div class="form-group">
                <label>Username*</label>
                <input type="text" class="form-control" name="username"
                       placeholder="Username" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label>Ngày sinh</label>
                <div class="input-group">
                     <span class="input-group-addon">
                        <i class="icon-fa icon-fa-calendar"></i>
                        </span>
                        <input type="date" class="form-control ls-datepicker" value="{{$user->ngay_sinh}}" name="ngay_sinh">
                </div>
            </div>
            <div class="form-group">
                <label class="radio-inline">
                        <input type="radio" name="gioi_tinh" id="inlineRadio1" value="0" @if($user->sex==0) checked @endif>
                        Nam
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gioi_tinh" id="inlineRadio2" value="1" @if($user->sex==1) checked @endif>
                        Nữ
                    </label>
        </div>
            <div class="form-group">
                <label>Biệt danh</label>
                <input type="text" class="form-control" name="nick_name"
                           placeholder="Nick name" value="{{$user->nick_name}}">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Mô tả về bạn</label>
                <textarea class="form-control" id="exampleTextarea" rows="3" name="decription">{{$user->decription}}</textarea>
                </div>
            <div class="form-group">
                    <label for="exampleInputFile">Avatar</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" name="avatar">
                    <small class="text-muted">Thêm hình ảnh mọi người sẽ thấy avatar của bạn.
                    </small>
                    <img src="upload/avatar/{{$user->avatar}}" width="300px">
            </div>
            <div class="form-group">
                    <label for="exampleInputFile">Ảnh bìa</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" name="anh_bia">
                    <small class="text-muted">Thêm hình ảnh mọi người sẽ thấy ảnh bìa của bạn.
                    </small>
                    <img src="upload/anhbia/{{$user->anh_bia}}" width="300px">
            </div>
            <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="link_facebook"
                               placeholder="Link facebook" value="{{$user->link_facebook}}">
                </div>
                <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" class="form-control" name="link_twitter"
                                   placeholder="Link twitter" value="{{$user->link_twitter}}">
                    </div>
                    <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" class="form-control" name="link_instagram"
                               placeholder="Link instagram" value="{{$user->link_instagram}}">
                </div>
            <button class="btn btn-primary" id ="submit">Submit</button>
        </form>

</div>
