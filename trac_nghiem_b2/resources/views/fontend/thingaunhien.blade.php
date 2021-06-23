<!DOCTYPE html>
<html>
@include('fontend.layout.head')
    
<body>
		@include('fontend.layout.menu')
	<div class="container" style="margin-top: 8%;">
      <div style="font-weight: bold;font-size: 20px;position: fixed;margin-left:30%;margin-top: 5%;margin-bottom: 7%; "> 
        <button type="button" name="button" class="btn btn-outline-success btn-block" id="btnStart" style="margin-left: 40%;width: 150px;height: 100px;border-radius:10%;font-size: 25px">Bắt đầu thi</button>
  		</div>
      <div style="margin-left:35%;display: none; color: #198754;" id="title">
        <h2>Đề thi ngẫu nhiên</h2>
      </div>
      <div style="font-weight: bold;font-size: 20px;position: fixed;margin-left:65%;display: none; " id="getTime">
        <label >Thời gian làm bài thi: <span id="time" style="color: red;"></span></label><br>
      </div>
      <div id="questions">
        <div class="row" style="margin:0 20% 0 20%;font-size: 13px;padding-top: 50px "  id="quest"> </div>
        <div class="row" >
          <div class="col-sm-12 text-center">
            <button type="button" name="button" class="btn btn-warning" style="width: 150px;display: none;padding: 20px;font-weight: bold;" id="btnFinish">Nộp bài thi</button>
          </div>
        </div>
        
        <div class="row" style="margin-left:30%;" id="ketqua" >
        
        </div>
      </div>
  		
	</div>	

  <script type="text/javascript">
    var questions;
    var arr = [];
    
     $('#btnStart').click(function()
      {
        GetQuestions();
        $('#btnFinish').show();
        $('#getTime').show();
        $('#title').show();
        $(this).hide();
      });

    $('#btnFinish').click(function()
    {
        $(this).hide();
        $('#getTime').hide();
        CheckResult();
    });

    function CheckResult()
    {
      let a = '';
      let diem = 0;
      let caudung = 0;
      let causai = 0;
      let ketqua = '';
      let form ='';
      let cauhoiliet = arr.find(x=>x.idloaicauhoi == 12)
      let dapan_chl = cauhoiliet['dapandung'];
     // console.log(dapan_chl);
      $('#questions div#luachon').each(function(k,v){
        let id = $(v).find('h5').attr('id');
        // console.log(arr);
        let question = arr.find(x=>x.id == id)

        let dapan = question['dapandung'];
        let da = $(v).find('input[type="radio"]:checked').attr('class');
        
        if(dapan_chl == da){ 
          a = 'Đúng';
        }
        else a = 'Sai'
        
        
        if (da == dapan){
         // console.log('câu có id:'+id+ 'đúng');
          diem += 1;
          caudung += 1;
        }else{
         // console.log('cấu có id:'+id+ 'sai');
          causai +=1;
        }

        if(diem > 32){
          if(a == 'Đúng'){
            ketqua = 'Đạt';
          }
        }  
        else
          ketqua = 'Trượt';

        //
        
        $('#check'+id+' > fieldset > label.'+dapan).css("background-color","#5BFB66");
          
      });
      
      form+= '<form style=" border: 2px solid red;width:450px;">';
        form+= '<fieldset disabled>';
        form+= '<h2 style="color:blue;margin-left:120px;">Kết quả thi</h2>';
        form+= '<hr id="hr" style="background-color:#c3bfbf;width:300px">'
        form+= '<div class="mb-3"><label for="disabledTextInput" class="form-label">Số câu trả lời đúng:<span style="color:red;font-weight:bold">'+caudung+'</span></label> </div>';
        form+= '<div class="mb-3"><label for="disabledTextInput" class="form-label">Số câu trả lời sai:<span style="color:red;font-weight:bold">'+causai+'</span></label></div>';
        form+= '<div class="mb-3"><label for="disabledTextInput" class="form-label"><h5>Điểm của bạn là : <span style="color:red;font-weight:bold">'+diem+'</span> &nbsp;  Câu hỏi điểm liệt: <span style="color:red;font-weight:bold">' +a+ '</span></h5></label></div>';
        form+= '<div class="mb-3"><label for="disabledTextInput" class="form-label"><h5>Kết quả : <span style="color:red;font-weight:bold">'+ketqua+'</span></h5></label></div>';
        form+= '<div class="mb-3"><label for="disabledTextInput" class="form-label"><h5 style="color:blue;"> Kéo lên trên để xem đáp án Đúng </h5></label></div>';
        form+= '</fieldset>';
        form+='<label style="margin:20px 20px 20px 120px;"><a href="{{url('thithu')}}"><button type="button" name="button" class="btn btn-success" style="width: 200px;">Làm lại </button></a></label> &nbsp;';
      form+= '</form> ';


      $('#ketqua').html(form);
      
    }

    function GetQuestions(){
      $.ajax({
        url:'random',
        type:'get',
        success:function(data)
        {
          questions = jQuery.parseJSON(data);
          let d = '';
          let index = 1;
           
         // console.log(questions);
          $.each(questions,function(key,v)
          {
           //console.log(key,v);
             $.each(v,function(key,v)
            {  
              arr.push(v);

              d+= '<div id="luachon">'
                d+= ' <div class="radio col-md-12" style="font-size: 20px;margin-bottom:20px;" id="check'+v['id']+'">';
                  d+= '<H5 style="font-weight: bold;color: red" id="'+v['id']+'" class="'+v['idloaicauhoi']+'">Câu '+index+':</H5> ';
                  d+= '<h4><img src="back/img/'+v['noidung']+'" width="600px"></h4>';
                  d+= '<fieldset> <b>Câu trả lời:</b>';
                  d+= ' <label class="1" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="1">1 </label> &nbsp; ';
                  d+= ' <label class="2" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="2">2 </label> &nbsp;  ';
                  d+= ' <label class="3" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="3">3 </label> &nbsp;  ';
                  d+= ' <label class="4" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="4">4 </label>';
                  d+= '</fieldset>'
                d+= '</div>';
                d+= '<hr width="600px">';
              d+= '</div>'
              index++;
            });
          }); 
          $('#quest').html(d);
        }

        
      });
    }

  </script>


  <script>
      // Thiết lập thời gian đích mà ta sẽ đếm
      var countDownDate = new Date().getTime()+ 1321000 ;
      // cập nhập thời gian sau mỗi 1 giây
      var x = setInterval(function() 
      {

        // Lấy thời gian hiện tại
        var now = new Date().getTime();

        // Lấy số thời gian chênh lệch
        var distance = countDownDate - now ;

        // Tính toán số  phút, giây từ thời gian chênh lệch
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // HIển thị chuỗi thời gian
        document.getElementById("time").innerHTML = minutes + " : " + seconds + " ";

        // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
        if (distance < 0) {
          clearInterval(x);
          
          document.getElementById("getTime").innerHTML = "Thời gian làm bài đã kết thúc";
          $('#btnFinish').click();
        }
      }, 1000);
  </script>

@include('fontend.layout.footer')
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
</body>

</html>