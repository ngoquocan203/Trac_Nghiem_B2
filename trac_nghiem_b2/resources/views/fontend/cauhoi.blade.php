<!DOCTYPE html>
<html>
@include('fontend.layout.head')
 
<body>
		@include('fontend.layout.menu')

	<div class="container">
    <div class="col-md-9 col-md-push-3" style="margin-top: 20px;">
      <h2 style="padding-left: 30%;color: #198754;">600 câu thi bằng lái xe ô tô</h2><br>
      <?php $a=1  ?>
      <div class="row">    
        
          <div class="col-md-8" style="padding-left: 30%;">
            @foreach($cauhoi as $ch)
            <b>Câu:{{$a++}}</b> &nbsp; Đáp án đúng : <b style="color: blue;">{{$ch->dapandung}}</b><!--<input class="btn btn-info btn-xs" type="button" value="Đáp án đúng" style="width: 100px;height: 20px;font-size:12px;line-height: 0;" id="button"> <span style="display: none;" ></span>-->
            
            <img src="{{asset('back/img/'.$ch->noidung)}}" width="600px">
            <hr width="600px">
             @endforeach
          </div>
       
      </div> 
     <div style="padding-left: 30%">{{$cauhoi->links()}}</div>
    </div>
	</div>	

  
@include('fontend.layout.footer')
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>