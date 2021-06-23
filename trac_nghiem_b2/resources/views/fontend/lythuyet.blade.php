<!DOCTYPE html>
<html>
@include('fontend.layout.head')
<body>
		@include('fontend.layout.menu')
	<div class="container">
	    <div class="main">
			<div class= "container-fluid"><br>
			   <div class= "row">  
			      <div class ="col-12 col-sm-6 col-md-4 " id="cont" >
			         <div class="title_col"><h2>600 Câu hỏi lý thuyết B2</h2></div>
			         <br>
			        <div><b>Bộ 600 câu hỏi sát hạch lái xe ô tô bao gồm:</b></div>
			        <ul class="list-group" >
			            <li class="list-group-item list-group"><strong>»</strong> 166 câu khái niệm và quy tắc GTĐB (1 - 166). </li>
			            <li class="list-group-item list-group"><strong>»</strong> 26 câu nghiệp vụ vận tải (167 - 192).</li>
			            <li class="list-group-item list-group"><strong>»</strong> 21 câu văn hóa GT, đạo đức người lái xe (193 - 213).</li>
			            <li class="list-group-item list-group"><strong>»</strong> 56 câu kỹ thuật lái xe (214 - 269).</li>
			            <li class="list-group-item list-group"><strong>»</strong> 35 câu cấu tạo và sửa chữa (270 - 304).</li>
			            <li class="list-group-item list-group"><strong>»</strong> 182 câu hệ thống biển báo (305 - 486).</li>
			            <li class="list-group-item list-group"><strong>»</strong> 114 câu giải các thế sa hình và kỹ năng xử lý tình huống (487 - 600).</li>	
			        </ul>
			        <div class="button_col"><a href="{{url('cauhoi')}}"><button>Xem đáp án 600 câu hỏi lý thuyết</button></a></div>
			      </div>
			      <div class ="col-12 col-sm-6 col-md-4 " id="cont_center"  >
			        <div class="title_col">
			        	<h2>60 câu hỏi điểm liệt</h2>
			        </div><br>
			        <div class="content_col"><br>
			        	<img src="font/image/de-thi-ly-thuyet-bang-lai-xe-oto-b2.png" width="150px" style="margin-left: 100px">
			        	<p>60 câu trong số 600 câu được xếp vào nhóm điểm liệt, khi thi sát hạch, nếu thí sinh trả lời sai bất kể câu nào trong số nhóm câu này sẽ bị trượt phần thi lý thuyết dù trả lời đúng tất cả các câu khác.</p>
			        
			        	<div class="button_col"><a href="{{url('cauhoiliet')}}"><button>Xem Đáp Án</button></a></div>
			        </div>
			      </div>
			      <div class ="col-12 col-sm-6 col-md-4 " id="cont"  >
			            <div class="title_col">
			        		<h2>Luyện tập  </h2>
			        	</div>
			        	<div style="padding-top: 10px">
			        		<ul class="list-group" >
			        			@foreach($loaicauhoi as $lch)
					            	<a href="luyentap/{{$lch->id}}" style="text-decoration: none;"><li class="list-group-item list-group"><strong>»</strong> {{$lch->loaicauhoi}} </li></a>
					            @endforeach
					        </ul>
			        	</div>
			      </div>
			       
			   </div>
			</div>
 
		</div><br>

		
	</div>
@include('fontend.layout.footer')
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>