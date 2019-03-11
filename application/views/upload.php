<style>
	.contain{
	margin-left:auto;
	margin-right:auto;  
	}
	#form1{
	width:auto;
	}
	.alert{
	text-align:center;
	}

	#blah{  
	max-height:256px;
	height:auto;
	width:auto;
	display:block;
	margin-left: auto;
	margin-right: auto;
	padding:5px;
	}
	#img_contain{
	border-radius:5px;
	/*  border:1px solid grey;*/
	margin-top:20px;
	width:auto;  
	}
	.input-group{  
	margin-top:40px;
	width:320px;
	}
	.imgInp{  
	width:150px;
	margin-top:10px;
	padding:10px;
	background-color:#d3d3d3;  
	}
	.loading{
	animation:blinkingText ease 2.5s infinite;
	}
	@keyframes blinkingText{
	0%{     color: #000;    }     
	50%{   color: #transparent; }
	99%{    color:transparent;  }
	100%{ color:#000; }
	}
	.custom-file-label{
	cursor:pointer;
	}

	/************CREDITS**************/
	.credit{    
	font: 14px "Century Gothic", Futura, sans-serif;
	font-size:12px;  
	color:#3d3d3d;
	text-align:left;
	margin-top:10px;
	margin-left:auto;
	margin-right:auto;
	text-align:center;
	}
	.credit a{
	color:gray;
	}
	.credit a:hover{
	color:black;  
	}
	.credit a:visited{
	color:MediumPurple;
	}
</style>
<div class="contain animated bounce">
  <?php echo form_open_multipart('manipulation/data'); ?>
      <div class="alert"></div>
      <div id='img_contain'><img id="blah" src="https://pngimage.net/wp-content/uploads/2018/05/cartoon-banana-png-3-300x200.png" alt="your image" title=''/></div> 
      	<div class="row">
	      	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	      	</div>
	      	<div class="col-xs-2 col-sm-4 col-md-4 col-lg-4" align="center">
	      		<div class="input-group">
			        <div class="custom-file">
			          	<input required name="fileImg" type="file" id="inputGroupFile01" class="imgInp custom-file-input" aria-describedby="inputGroupFileAddon01">
			          	<label align="left" class="custom-file-label" for="inputGroupFile01">Choose file</label>
			        </div>		
	      		</div>
	      		<br>
	      		<button type="submit" class="btn btn-success mr-2">Submit</button>
	      	</div>
      	</div>
  <?php echo form_close(); ?>
</div>
<script>
	$("#inputGroupFile01").change(function(event) {  
  RecurFadeIn();
  readURL(this);    
});
$("#inputGroupFile01").on('click',function(event){
  RecurFadeIn();
});
function readURL(input) {    
  if (input.files && input.files[0]) {   
    var reader = new FileReader();
    var filename = $("#inputGroupFile01").val();
    filename = filename.substring(filename.lastIndexOf('\\')+1);
    reader.onload = function(e) {
      debugger;      
      $('#blah').attr('src', e.target.result);
      $('#blah').hide();
      $('#blah').fadeIn(500);      
      $('.custom-file-label').text(filename);             
    }
    reader.readAsDataURL(input.files[0]);    
  } 
  $(".alert").removeClass("loading").hide();
}
function RecurFadeIn(){ 
  console.log('ran');
  FadeInAlert("Wait for it...");  
}
function FadeInAlert(text){
  $(".alert").show();
  $(".alert").text(text).addClass("loading");  
}
</script>
