<!DOCTYPE html>
<html>
@include('backend.layout.head')
<body>
	@include('backend.layout.nav')
		
	@include('backend.layout.menu')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Câu hỏi</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa câu hỏi</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									
									<div class="form-group" >
										<label>Nội dung câu hỏi </label>
										<input required id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)" value="{{$cauhoi->image}}">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('back/img/'.$cauhoi->noidung)}}">
									</div>
									<div class="form-group" >
										<label>Đáp án đúng</label>
										<input required type="text" name="dapandung" class="form-control" value="{{$cauhoi->dapandung}}">
									</div>
									<div class="form-group" >
										<label>Mã đề thi</label>
										<select required name="madethi" class="form-control">
											@foreach($dethi as $dt)
												<option value="{{$dt->id}} ">{{$dt->id}}  ({{$dt->tendethi}})</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Loại câu hỏi</label>
										<select required name="loaicauhoi" class="form-control">
											@foreach($loaicauhoi as $lch)
												<option value="{{$lch->id}}">{{$lch->id}} ({{$lch->loaicauhoi}})</option>
											@endforeach
					                    </select>
									</div>
									
									<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@include('backend.layout.footer')
	<script>
		
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#img').click();
		    });
		});
	</script>	
</body>

</html>
