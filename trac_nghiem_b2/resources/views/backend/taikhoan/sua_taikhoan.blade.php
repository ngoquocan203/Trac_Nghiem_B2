 <!DOCTYPE html>
<html>
@include('backend.layout.head')
<body>
	@include('backend.layout.nav')
		
	@include('backend.layout.menu')  


       <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tài khoản</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                
                <div class="panel panel-primary">
                    <div class="panel-heading">Sửa tài khoản</div>
                    <div class="panel-body">
                        
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                              {{session('thongbao')}}
                            </div>
                        @endif
                            <form method="post">
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="Fullname" value="{{$user->name}}" required />
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email"  value="{{$user->email}}" required />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="Password" value="{{$user->password}}" required />
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <input type="text" name="level" class="form-control" placeholder="Password" value="{{$user->level}}" required />
                                </div>
                                <input type="submit" name="submit" value="Sửa" class="btn btn-primary" />
                                <a href="{{asset('backend/taikhoan')}}" class="btn btn-danger">Hủy bỏ</a>
                                {{csrf_field()}}
                            </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>  <!--/.main-->

	@include('backend.layout.footer')
	
</body>

</html>
