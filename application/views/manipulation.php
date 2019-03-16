<div class="col-12">
  <div class="row">
     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center" >
          <h4 class="card-title">Original Image</h4>
          <canvas id="canvas" width="150" height="200" style="background-color:white;margin-bottom: 10px"></canvas>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center">
          <h4 class="card-title">Grayscale</h4>
          <canvas id="canvas1" width="150" height="200" style="background-color:white;margin-bottom: 10px"></canvas>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center">
          <h4 class="card-title">Treshold</h4>
          <canvas id="canvas2" width="150" height="200" style="background-color:white"></canvas>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="center">
          <h4 class="card-title">Segmentasi</h4>
          <canvas id="canvas3" width="150" height="200" style="background-color:white"></canvas>
        </div>
      </div>   
     </div>
     <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <h3 align="center" >Ekstraksi Citra</h3> 
        <div class="row" style="padding-left: 5%;padding-top: 10px" >
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">RED</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" id="redInp" placeholder="Red" readonly>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">GREEN</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" id="greenInp" placeholder="Green" readonly>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">BLUE</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" id="blueInp"  placeholder="Blue" readonly>
              </div>
            </div>
          </div>
        </div>
      <div class="row" style="padding-left: 5%" >
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">HUE</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="hueInp" placeholder="Hue" readonly>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">SATUR</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="saturInp" placeholder="Saturation" readonly>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-4  col-md42 col-lg-4"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">INTEN</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="intenInp"  placeholder="Intensity" readonly>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="padding-left: 5%" >
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">CONT</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="contrasInp" placeholder="Contras" readonly>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">ENTRO</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="entroInp" placeholder="Entropy" readonly>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-4  col-md-4 col-lg-4"> 
        </div>
        <div class="col-xs-4 col-sm-4  col-md-4 col-lg-4"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">ENERGY</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="energyInp"  placeholder="Energy" readonly>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-4  col-md-4 col-lg-4"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">HGEN</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="homogenInp" placeholder="Homogen" readonly>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-4  col-md-4 col-lg-4"> 
        </div>
      </div>
      <h3 style="padding-top: 10px;padding-bottom: 10px" align="center">Data Objek</h3>
      <div class="row" style="padding-left: 5%" >
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">NAMA FILE</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="filenameInp"  readonly value="<?php echo $img->filename?>">           
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"> 
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">KEMATANGAN</label>
            <div class="col-sm-8">
              <select class="form-control form-control-sm" id="kematanganInp">
                <option value="matang">Matang</option>
                <option value="setMatang">Setengah Matang</option>
                <option value="mentah">Mentah</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">PREDIKSI</label>
            <div class="col-sm-9 input-group">
              <input type="number" class="form-control" id="prediksiInp" onfocus="focusInp()" value="null"  placeholder="Berapa Hari Matang">
              <div class="input-group-append bg-warning border-warning">
                <span class="input-group-text bg-transparent">
                  <i style="color: white;font-size: 10pt;">Hari</i>
                </span>
              </div>         
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-sm-4  col-md-4 col-lg-4"> 
        </div>
      </div>
      <div class="row" align="right">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <input id="grayscalebtn" class="btn btn-warning mr-2 btn-block" value="Ekstraksi Citra" type="button">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <input id="rgbBtn" disabled class="btn btn-success mr-2 btn-block" value="Simpan Data" type="button">
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function focusInp() {
    document.getElementById('prediksiInp').style.backgroundColor = '#ffffff';
  }
  var postDataset = function()
  {
    var red = $('#redInp').val();
    var green = $('#greenInp').val();
    var blue = $('#blueInp').val();
    var hue= $('#hueInp').val();
    var sat = $('#saturInp').val();
    var int = $('#intenInp').val();
    var ent = $('#entroInp').val();
    var con = $('#contrasInp').val();
    var hom = $('#homogenInp').val();
    var ene = $('#energyInp').val();
    var filename = $('#filenameInp').val();
    var kematangan = $('#kematanganInp').val();
    var prediksi = $('#prediksiInp').val();

    if (prediksi == "")
    {
      document.getElementById("prediksiInp").style.backgroundColor = '#ffdddd';
    }
    else{
      $.ajax({
        type: "POST",
        url: 'http://localhost/bananaApi/index.php/Ekstraksi',
        data: {redInp:red,greenInp:green,blueInp:blue,hueInp:hue,saturInp:sat,intenInp:int,entroInp:ent,contrasInp:con,homogenInp:hom,energyInp:ene,filenameInp:filename,kematanganInp:kematangan,prediksiInp:prediksi},
        dataType: 'json',
        success : function(response){
          alert(response.status);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          alert("some error");
        }
      });
    }
  }
  var rgbbtn = document.getElementById('rgbBtn');
  rgbbtn.addEventListener('click', postDataset);
</script>
<script>
  var img = new Image();
  img.src = <?php echo "'".$img->filename."'"?>;
  img.onload = function() {
    draw(this);
  };

var getHsi = function () {
    var image =<?php echo "'".$img->filename."'"?>;
    $.ajax({
      type: "GET",
      url: 'http://localhost/bananaApi/index.php/Ekstraksi',
      data: {image:image},
      dataType: 'json',
      success : function(response){
        $('#grayscalebtn').prop('disabled',true); 
        $('#rgbBtn').prop('disabled',false); 
        $('#redInp').val(response.R);
        $('#greenInp').val(response.G);
        $('#blueInp').val(response.B);
        $('#hueInp').val(response.H);
        $('#saturInp').val(response.S);
        $('#intenInp').val(response.I);
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
      alert("some error");}
    });
  }

function draw(img) {
  var canvas4 = document.getElementById('canvas3');
  var canvas3 = document.getElementById('canvas2');
  var canvas2 = document.getElementById('canvas1');
  var canvas = document.getElementById('canvas');
  var ctx = canvas.getContext('2d');
  var ctx2 = canvas2.getContext('2d');
  var ctx3 = canvas3.getContext('2d');
  var ctx4 = canvas4.getContext('2d');
  ctx.drawImage(img, 0, 0,150,200);
  img.style.display = 'none';
  var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
  var imageData2 = ctx.getImageData(0, 0, canvas.width, canvas.height);
  var imageData3 = ctx.getImageData(0, 0, canvas.width, canvas.height);
  var data = imageData.data;
  var data2 = imageData2.data;
  var data3 = imageData3.data;

  var histogram = function() {
    var histo=[];
    var varRed = 0;
    var varBlue = 0;
    var varGreen = 0;
    var average = 0;
    var rata=0;
    for (var i = 0; i < data.length; i += 4) {
        var avg = Math.round((parseInt(data[i]) + parseInt(data[i + 1]) + parseInt(data[i + 2]))/3);
        data[i]     = avg; // red
        data[i + 1] = avg; // green
        data[i + 2] = avg; // blue 
        if ((data2[i] >= 100 && data2[i+1] >= 100 && data2[i+2]<100) || avg<100 ) 
          {
            data2[i]     = 255; // red
            data2[i + 1] = 255; // green
            data2[i + 2] = 255; // blue 
          } 
        else
        {
          data2[i]     = 0; // red
          data2[i + 1] = 0; // green
          data2[i + 2] = 0; // blue
          data3[i]     = 0; // red
          data3[i + 1] = 0; // green
          data3[i + 2] = 0; // blue
        }
    }
    ctx2.putImageData(imageData, 0, 0);
    ctx3.putImageData(imageData2, 0, 0);
    ctx4.putImageData(imageData3, 0, 0);
  };
  var grayscalebtn = document.getElementById('grayscalebtn');
  grayscalebtn.addEventListener('click', histogram);
  var grayscalebtn = document.getElementById('grayscalebtn');
  grayscalebtn.addEventListener('click', getHsi);
}
</script>
