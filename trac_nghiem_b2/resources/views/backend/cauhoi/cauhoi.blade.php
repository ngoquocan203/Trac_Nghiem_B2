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
					<div class="panel-heading">Danh sách câu hỏi</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								@if(session('thongbao'))
									<div class="alert alert-success">
										{{session('thongbao')}}
									</div>
								@endif 
								@if(session('thongbao1'))
									<div class="alert alert-success">
										{{session('thongbao1')}}
									</div>
								@endif 
								@if(session('thongbao2'))
									<div class="alert alert-success">
										{{session('thongbao2')}}
									</div>
								@endif 
								<a href="{{asset('backend/themcauhoi')}}" class="btn btn-primary">Thêm câu hỏi</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="25%">Nội dung câu hỏi</th>
											
											<th width="">Đáp án Đúng</th>
											<th width="">Mã loại Câu hỏi</th>
											<th width="">Mã đề thi</th>
											<!--<th>Loại câu hỏi</th>-->
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($cauhoi as $ch)
										<tr>
											<td>{{$ch->id}}</td>
											<td><img width="500px" src="{{asset('back/img/'.$ch->noidung)}}"></td>
											
											<td>{{$ch->dapandung}}</td>	
											<td>{{$ch->idloaicauhoi}}</td>	
											<td>{{$ch->madethi}}</td>		
											<td>
												<a href="backend/suacauhoi/{{$ch->id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="backend/xoacauhoi/{{$ch->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								<div>
									<form action="{{url('backend/import-csv')}}" method="POST" enctype="multipart/form-data">
							            @csrf
							            <input type="file" name="file" accept=".xlsx"><br>
							            <input type="submit" value="Import File Excel" name="import_csv" class="btn btn-warning">
							        </form>
							        <form action="{{url('backend/export-csv')}}" method="POST">
							            @csrf
							            <input type="submit" value="Export File Excel" name="export_csv" class="btn btn-success">
							        </form>
								</div>
								

								{{$cauhoi->links()}}							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
		  

	@include('backend.layout.footer')

</body>

</html>

