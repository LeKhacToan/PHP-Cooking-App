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
