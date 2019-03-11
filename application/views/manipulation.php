<!-- Learn about this code on MDN: https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API/Tutorial/Pixel_manipulation_with_canvas -->
<div class="row">
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
    <h4 class="card-title">Original Image</h4>
    <canvas id="canvas" width="300" height="300" style="background-color:#add8e6"></canvas>
  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
    <h4 class="card-title">Tresholde</h4>
    <canvas id="canvas1" width="300" height="300" style="background-color:#add8e6"></canvas>
  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
    <h4 class="card-title">Croping</h4>
    <canvas id="canvas2" width="300" height="300" style="background-color:#add8e6"></canvas>
  </div>
</div>
<br>
<div class="row col-12" style="padding-left: 5%" >
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">RED</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="inpRed" name="inpRed" placeholder="Red">
      </div>
    </div>
  </div>
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">GREEN</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="inpGreen" name="inpGreen" placeholder="Green">
      </div>
    </div>
  </div>
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">BLUE</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="inpBlue" name="inpBlue" placeholder="Blue">
      </div>
    </div>
  </div>
  <!-- <input id="invertbtn" value="Invert" type="button"> -->
</div>
<br>
<div class="row col-12" style="padding-left: 5%" >
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">HUE</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="inpHue" name="inpHue" placeholder="Hue">
      </div>
    </div>
  </div>
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">SATUR</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="inpSatur" name="inpRed" placeholder="Saturation">
      </div>
    </div>
  </div>
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"> 
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">INTEN</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="inpInten" name="inpInten" placeholder="Intensity">
      </div>
    </div>
  </div>
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <input id="grayscalebtn" class="btn btn-success mr-2 btn-block" value="Dapatkan Data" type="button">
  </div>
  <!-- <input id="invertbtn" value="Invert" type="button"> -->
</div>
<script>
  var img = new Image();
  img.src = <?php echo "'".$img->filename."'"?>;
  img.onload = function() {
    draw(this);
  };

  function draw(img) {
    var canvas2 = document.getElementById('canvas1');
    var canvas3 = document.getElementById('canvas2');
    var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    var ctx2 = canvas2.getContext('2d');
    var ctx3 = canvas3.getContext('2d');
    ctx.drawImage(img, 0, 0);
    img.style.display = 'none';
    var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
    var imageData2 = ctx.getImageData(0, 0, canvas.width, canvas.height);
    var data = imageData.data;
    var data2 = imageData2.data;
      
    // var invert = function() {
    //   for (var i = 0; i < data.length; i += 4) {
    //     data[i]     = 255 - data[i];     // red
    //     data[i + 1] = 255 - data[i + 1]; // green
    //     data[i + 2] = 255 - data[i + 2]; // blue
    //   }
    //   ctx.putImageData(imageData, 0, 0);
    // };

    var grayscale = function() {
      var varRed = 0; var varBlue = 0; var varGreen = 0;
      for (var i = 0; i < data.length; i += 4) {
        var avg = (data[i] + data[i + 1] + data[i + 2]) / 3;
        if (avg < 125)
        {
            varRed = varRed+data[i];
            varGreen = varGreen+data[i+1];
            varBlue = varBlue+data[i+2];
            data[i]     = 0; // red
            data[i + 1] = 0; // green
            data[i + 2] = 0; // blue
        }
        else
        {
            data[i]     = 255; // red
            data[i + 1] = 255; // green
            data[i + 2] = 255; // blue
            data2[i]     = 255; // red
            data2[i + 1] = 255; // green
            data2[i + 2] =255; // blue
        }
        
      }
      $('#inpRed').val(varRed);
      $('#inpGreen').val(varGreen);
      $('#inpBlue').val(varBlue);
      ctx2.putImageData(imageData, 0, 0);
      ctx3.putImageData(imageData2, 0, 0);
    };

    // var invertbtn = document.getElementById('invertbtn');
    // invertbtn.addEventListener('click', invert);
    var grayscalebtn = document.getElementById('grayscalebtn');
    grayscalebtn.addEventListener('click', grayscale);
  }
</script>