<link rel="stylesheet" href="<?php echo base_url('')?>assets/css/spinner.css">
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
          <div class="table-responsive"  style="background-color: white;margin:15px;">
            <table class="table">
              <thead>
                <tr>
                  <th width="5%">GLCM</th>
                  <th>CONTRAS</th>
                  <th>HOMOGEN</th>
                  <th>ENERGY</th>
                  <th>ENTROPY</th>
                  <th>CORELATION</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>GLCM-0</td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpContras0"  placeholder="Contras" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpHomogen0"  placeholder="Homogenity" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpEnergy0"  placeholder="Energy" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpEntropy0"  placeholder="Entropy" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpCorelation0"  placeholder="Corelation" readonly></td>
                </tr>
                <tr>
                  <td>GLCM-45</td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpContras45"  placeholder="Contras" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpHomogen45"  placeholder="Homogenity" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpEnergy45"  placeholder="Energy" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpEntropy45"  placeholder="Entropy" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpCorelation45"  placeholder="Corelation" readonly></td>
                </tr>
                <tr>
                  <td>GLCM-90</td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpContras90"  placeholder="Contras" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpHomogen90"  placeholder="Homogenity" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpEnergy90"  placeholder="Energy" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpEntropy90"  placeholder="Entropy" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpCorelation90"  placeholder="Corelation" readonly></td>
                </tr>
                <tr>
                  <td>GLCM-135</td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpContras135"  placeholder="Contras" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpHomogen135"  placeholder="Homogenity" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpEnergy135"  placeholder="Energy" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpEntropy135"  placeholder="Entropy" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpCorelation135"  placeholder="Corelation" readonly></td>
                </tr>
                <tr>
                  <td>GLCM-AVG</td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpContrasAvg"  placeholder="Contras" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpHomogenAvg"  placeholder="Homogenity" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpEnergyAvg"  placeholder="Energy" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpEntropyAvg"  placeholder="Entropy" readonly></td>
                  <td><input type="number" class="form-control" style="background-color: white;border-color: white; padding:0px 0px" id="inpCorelationAvg"  placeholder="Corelation" readonly></td>
                </tr>
              </tbody>
            </table>
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
              <input type="number" class="form-control" id="prediksiInp" onfocus="focusInp()" value=""  placeholder="Berapa Hari Matang">
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
          <button id="extractBtn" class="btn btn-warning mr-2 btn-block" type="button">
            <span id="spinner-load"></span>
            <span id="textBtnExtract">Ekstraksi Citra</span>
          </button>
        <!-- <input id="grayscalebtn" class="btn btn-warning mr-2 btn-block" value="Ekstraksi Citra" type="button"> -->
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <button id="saveBtn" class="btn btn-success mr-2 btn-block" type="button">
            <span id="spinner-loadSimpan"></span>
            <span id="textBtnSimpan">Simpan Data</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
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
      $('#spinner-loadSimpan').addClass('spinner-border spinner-border-sm');
      document.getElementById("textBtnSimpan").innerHTML = "Loading...";
      $.ajax({
        type: "POST",
        url: 'http://localhost/bananaApi/index.php/Ekstraksi',
        data: {redInp:red,greenInp:green,blueInp:blue,hueInp:hue,saturInp:sat,intenInp:int,entroInp:ent,contrasInp:con,homogenInp:hom,energyInp:ene,filenameInp:filename,kematanganInp:kematangan,prediksiInp:prediksi},
        dataType: 'json',
        success : function(response){
          location.replace("<?php echo site_url('') ?>");
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          alert("some error");
        }
      });
    }
  }
  var save = document.getElementById('saveBtn');
  save.addEventListener('click', postDataset);
</script>
<script>
  var img = new Image();
  img.src = <?php echo "'".$img->filename."'"?>;
  img.onload = function() {
    draw(this);
  };

var getExtract = function () {
    var image =<?php echo "'".$img->filename."'"?>;
    $('#spinner-load').addClass('spinner-border spinner-border-sm');
    document.getElementById("textBtnExtract").innerHTML = "Loading...";
    $.ajax({
      type: "GET",
      url: 'http://localhost/bananaApi/index.php/Ekstraksi',
      data: {image:image},
      dataType: 'json',
      success : function(response){
        $('#grayscalebtn').prop('disabled',true); 
        $('#rgbBtn').prop('disabled',false); 
        $('#redInp').val(response.hsi.R);
        $('#greenInp').val(response.hsi.G);
        $('#blueInp').val(response.hsi.B);
        $('#hueInp').val(response.hsi.H);
        $('#saturInp').val(response.hsi.S);
        $('#intenInp').val(response.hsi.I);
        $('#inpContras0').val(response.glcm.glcm0.contras);
        $('#inpContras45').val(response.glcm.glcm45.contras);
        $('#inpContras90').val(response.glcm.glcm90.contras);
        $('#inpContras135').val(response.glcm.glcm135.contras);
        $('#inpContrasAvg').val(response.glcm.glcmavg.contras);
        $('#inpHomogen0').val(response.glcm.glcm0.homogen);
        $('#inpHomogen45').val(response.glcm.glcm45.homogen);
        $('#inpHomogen90').val(response.glcm.glcm90.homogen);
        $('#inpHomogen135').val(response.glcm.glcm135.homogen);
        $('#inpHomogenAvg').val(response.glcm.glcmavg.homogen);
        $('#inpEnergy0').val(response.glcm.glcm0.energy);
        $('#inpEnergy45').val(response.glcm.glcm45.energy);
        $('#inpEnergy90').val(response.glcm.glcm90.energy);
        $('#inpEnergy135').val(response.glcm.glcm135.energy);
        $('#inpEnergyAvg').val(response.glcm.glcmavg.energy);
        $('#inpEntropy0').val(response.glcm.glcm0.entropy);
        $('#inpEntropy45').val(response.glcm.glcm45.entropy);
        $('#inpEntropy90').val(response.glcm.glcm90.entropy);
        $('#inpEntropy135').val(response.glcm.glcm135.entropy);
        $('#inpEntropyAvg').val(response.glcm.glcmavg.entropy);
        $('#inpCorelation0').val(response.glcm.glcm0.korelasi);
        $('#inpCorelation45').val(response.glcm.glcm45.korelasi);
        $('#inpCorelation90').val(response.glcm.glcm90.korelasi);
        $('#inpCorelation135').val(response.glcm.glcm135.korelasi);
        $('#inpCorelationAvg').val(response.glcm.glcmavg.korelasi);
        $('#spinner-load').removeClass('spinner-border spinner-border-sm');
        document.getElementById("textBtnExtract").innerHTML = "Ekstraksi Citra";
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
  var extract = document.getElementById('extractBtn');
  extract.addEventListener('click', histogram);
  var extract = document.getElementById('extractBtn');
  extract.addEventListener('click', getExtract);
}
</script>
