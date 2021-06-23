<!DOCTYPE html>
<html>
@include('fontend.layout.head')
<style type="text/css">
	label{
		font-weight: bold;
	}

	h2{
		color: #01FACC;
		margin-left: 30%;
		margin-top:20px;
	}
</style>
<body>
		@include('fontend.layout.menu')
	<div class="container" ><h2 >Đăng ký học lái xe ô tô</h2>
		<form method="post" >
			<div class="row" style="margin: 5% 7% 0 7%">
				<div class="col">
					<div class="form-group">
						<label>Họ Tên</label>
						<input type="text" class="form-control"  placeholder="Điền họ tên" style="width:100%">
					</div><br>
					
				</div>
				<div class="col">
					
					<div class="form-group">
						<label>Số điện thoại</label>
						<input type="text" class="form-control"  placeholder="Số điện thoại" style="width:100%">
					</div><br>
				</div>
			</div>
			<div class="row" style="margin-left:7%">
				<div class="form-group"  style="margin-left:">
					<label>Nội dung</label><br>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="width: 92%"></textarea>
				</div>

				<div class="form-group" >
						<input type="submit" name="submit" value="Gửi" class="btn btn-success" style="margin:1% 0 0 40%;width: 10%">
					</div>
					
			</div>
		</form>	
		
	</div>
	
@include('fontend.layout.footer')

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>