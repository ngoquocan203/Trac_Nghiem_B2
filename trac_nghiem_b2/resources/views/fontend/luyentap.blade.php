<!DOCTYPE html>
<html>
@include('fontend.layout.head')
<body>
		@include('fontend.layout.menu')
  <div class="container" style="margin-top: 100px;">
      
      <div style="margin-left:35%; color: #198754;" id="title">
        <h2>Luyện tập theo loại câu hỏi </h2>
      </div>
      <div id="questions">
        <div class="row" style="margin:0px 0px 20px 300px;font-size: 13px;padding-top: 50px "  id="quest"> </div>
        <div class="row" >
          <div class="col-sm-12 text-center">
            <button type="button" name="button" class="btn btn-success" style="width: 150px; padding: 20px; font-weight: bold;" id="btnFinish">Xem đáp án</button>
          </div>
        </div>
        
        <div class="row" style="margin-left:30%;" id="ketqua" >
        
        </div>
      </div>
      
  </div>  
<script type="text/javascript">
	
        GetQuestions();
      

	 $('#btnFinish').click(function(){
        $(this).hide();
       // $('#getTime').hide();
        CheckResult();
    });

	function CheckResult(){
    	
        $('#questions div#luachon').each(function(k,v){
        let id = $(v).find('h5').attr('id');
        //console.log(id);
        let question = questions.find(x=>x.id == id)
        let dapan = question['dapandung'];
       // let dethi = question['madethi'];
        console.log(question);
        //console.log(dapan);

        let da = $(v).find('input[type="radio"]:checked').attr('class');
        
        if (da == dapan) {
          console.log('câu có id:'+id+ 'đúng');
         
        }else{
          console.log('cấu có id:'+id+ 'sai');
         
        }
        
        $('#check'+id+' > fieldset > label.'+dapan).css("background-color","#5BFB66");
      });
    };

	function GetQuestions(){
      const urlweb = window.location.pathname;
      const id = urlweb.split('/').pop();
     // 
     //var baseUrl = (window.location).href;
     //console.log(id);
      $.ajax({
        url:'luyentapp/'+id,
        type:'get',

        success:function(data)
        {
          questions = jQuery.parseJSON(data);//
          console.log(questions);
          let d = '';
          let index = 1;
          $.each(questions,function(k,v){
            d+= '<div id="luachon">'
              d+= ' <div class="radio col-md-12" style="font-size: 20px;margin-bottom:20px;" id="check'+v['id']+'">';
                d+= '<H5 style="font-weight: bold;color: red" id="'+v['id']+'">Câu '+index+':</H5> ';
                d+= '<h4><img src="back/img/'+v['noidung']+'" width="600px"></h4>';
                d+= '<fieldset><b>Câu trả lời:</b>';
                d+= ' <label class="1" style="color:blue;font-weight:bold;"><input  type="radio" name="optradio'+index+'" class="1">1 </label> &nbsp; ';
                d+= ' <label class="2" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="2">2 </label> &nbsp;  ';
                d+= ' <label class="3" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="3">3 </label> &nbsp;  ';
                d+= ' <label class="4" style="color:blue;font-weight:bold;"><input type="radio" name="optradio'+index+'" class="4">4 </label>';
                d+= '</fieldset>'
              d+= '</div>';
              
            d+= '</div>'
            index++;
          });
          $('#quest').html(d);
        }
      });
    }
</script>
  


@include('fontend.layout.footer')
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>