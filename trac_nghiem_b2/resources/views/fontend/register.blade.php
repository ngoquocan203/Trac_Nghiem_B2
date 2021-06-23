<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
   <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Getting Started</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>
<body>
      <div class="register-photo">
        <div class="form-container">
          <img src="assets/img/de-thi-ly-thuyet-bang-lai-xe-oto-b2.png" width="350px">
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                @include('backend.errors.not')
                @if(session('thongbao1'))
                  <div class="alert alert-success">
                    {{session('thongbao1')}}
                  </div>
                @endif 
                <h2 class="text-center"><strong>Đăng ký tài khoản</strong> </h2>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="repassword" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Đăng ký</button></div>
                 <a href="{{url('login')}}"><div class="form-group"><input type="button" class="btn btn-primary btn-block" value="<< Đăng nhập"></div></a>

                 {{csrf_field()}}
            </form>
           
            
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
         

           
         