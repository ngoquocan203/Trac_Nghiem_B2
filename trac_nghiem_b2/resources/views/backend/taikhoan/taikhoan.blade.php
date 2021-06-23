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
					<div class="panel-heading">Danh sách tài khoản</div>
					<div class="container">
					    <div class="row">
					    	<div class="col-sm-12">
					        	@if(session('thongbao1'))
		                            <div class="alert alert-success">
		                              {{session('thongbao1')}}
		                            </div>
	                        	@endif
					        	<table class="table table-striped" style="margin-top: 20px;">
					            	<tr id="tbl-first-row" style="font-weight: bold;">
					                	<td width="5%">ID</td>
					                    <td width="30%">Tên người dùng</td>
					                    <td width="25%">Email</td>
					                    <td width="25%">Mật khẩu</td>
					                    <td width="5%">Level</td>
					                    <td width="5%">Sửa</td>
					                    <td width="5%">Xóa</td>
					                </tr>
					                @foreach($user as $u)
					                <tr>
					                	<td>{{$u->id}}</td>
					                    <td>{{$u->name}}</td>
					                    <td>{{$u->email}}</td>
					                    <td>{{$u->password}}</td>
					                    <td>{{$u->level}}</td>
					                    <td><a href="backend/suataikhoan/{{$u->id}}" class="btn btn-warning">Sửa</a></td>
					                    <td><a href="backend/xoataikhoan/{{$u->id}}" class="btn btn-danger">Xóa</a></td>
					                </tr>	
					                @endforeach				     
								</table>
					        
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
		  

	@include('backend.layout.footer')
	
</body>

</html>

