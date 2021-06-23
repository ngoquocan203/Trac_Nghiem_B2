<!DOCTYPE html>
<html>
@include('backend.layout.head')
<body>
	@include('backend.layout.nav')
		
	@include('backend.layout.menu')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục loại câu hỏi</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa loại câu hỏi
						</div>
						<div class="panel-body">
							<form method="post">
								<div class="form-group">
								<label>Loại câu hỏi:</label>
    							<input type="text" name="name" class="form-control" value="{{$loaicauhoi->loaicauhoi}}"/>
    							
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="form-control btn btn-primary"  value="Sửa">
								</div>
								<div class="form-group">
									<a class="form-control btn btn-danger" href="{{asset('backend/loaicauhoi')}}">Hủy </a>
								</div>
								{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

	@include('backend.layout.footer')
	
	
</body>

</html>