<div class="login-form" id="id-login">
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
    <form class="login animate" action="login" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your account with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-success">Login</button>
        <a  class="btn btn-danger" onclick="document.getElementById('id-login').style.display='none'">Cancel</a>
        <p>Forgot <a href="#">password?</a></p>
        <a href="#"> I do not have an account</a>
    </form>
</div>
