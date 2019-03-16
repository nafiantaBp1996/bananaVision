<!-- Learn about this code on MDN: https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API/Tutorial/Pixel_manipulation_with_canvas -->
<div class="row">
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
    <h4 class="card-title">Original Image</h4>
    <canvas id="canvas" width="300" height="400" style="background-color:white"></canvas>
  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
    <h4 class="card-title">Tresholde</h4>
    <canvas id="canvas1" width="300" height="400" style="background-color:white"></canvas>
  </div>
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="center">
    <h4 class="card-title">Croping</h4>
    <canvas id="canvas2" width="300" height="400" style="background-color:white"></canvas>
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
        <input type="number" class="form-control" id="inpSatur" name="inpSatur" placeholder="Saturation">
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
  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    <input id="rgbBtn" class="btn btn-success mr-2 btn-block" value="Dapatkan RGB" type="button">
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
    function otsuhisto (arrayHisto)
    {
        var otsuValue = 130;
        var fmax = -1.0;
        var m1;
        var m2;
        var s;
        var toplam1 = 0.0;
        var toplam2 = 0.0;
        var nTop = 0;
        var n1 = 0;
        var n2;

        for (var i =0; i < 256; i++) {
          toplam1 += i*parseFloat(arrayHisto[i]);
          nTop +=parseFloat(arrayHisto[i]);
        }

        for (var i =0; i < 256; i++) {
          n1 += parseFloat(arrayHisto[i]);
          if (n1==0)
          {

          }
          n2 = nTop - n1;
          if (n2==0)
          {
            break;
          }
          toplam2 += i*parseFloat(arrayHisto[i]);
          m1 = toplam2 / n1;
          m2 = (toplam1 - toplam2) / n2;
          s = n1*n2*(m1-m2)*(m1-m2);

          if (s>fmax)
          {
            fmax = s;
            otsuValue = i;
          }
      }
      return otsuValue;
    }

    var histogram = function() {
      var histo=[];
      var varRed = 0;
      var varBlue = 0;
      var varGreen = 0;
      var average = 0;
      var rata=0;
      for (let index = 0; index < 256; index++) {
        histo[index] = 0;
      }
      for (var i = 0; i < data.length; i += 4) {
           var avg = Math.floor((parseInt(data[i]) + parseInt(data[i + 1]) + parseInt(data[i + 2]))/3);
          histo[avg] = histo[avg]+1;
          data[i]     = avg; // red
          data[i + 1] = avg; // green
          data[i + 2] = avg; // blue
      }
      //ctx2.putImageData(imageData, 0, 0);
      var dataOtsu = otsuhisto(histo);
      for (var i = 0; i < data.length; i += 4) {
          if ((data2[i] >= dataOtsu && data2[i+1] >= dataOtsu && data2[i+2]<dataOtsu) || data[i]<dataOtsu ) 
            {
              data[i]     = 0; // red
              data[i + 1] = 0; // green
              data[i + 2] = 0; // blue 
            } 
          // if (data[i]<dataOtsu) 
          //   {
          //     data[i]     = 0; // red
          //     data[i + 1] = 0; // green
          //     data[i + 2] = 0; // blue 
          //   }
          else
          {
            data[i]     = 255; // red
            data[i + 1] = 255; // green
            data[i + 2] = 255; // blue
            data2[i]    =255; // red
            data2[i + 1]=255; // green
            data2[i + 2]=255; // blue
          }
      }
      $('#inpHue').val(dataOtsu);
      
      ctx2.putImageData(imageData, 0, 0);
      ctx3.putImageData(imageData2, 0, 0);
    };

    var hsi = function()
    {
      var R = 0; var G = 0; var B = 0;
      var pixels=0;
      var Htotal=0; var Stotal=0; var Itotal=0; 
      for (var i = 0; i < data2.length; i += 4) {
          var H=0; var S=0; var I=0;
          var minD =0; var maxD = 0;delta = 0;
          if (data2[i]!=255) 
          {
            pixels+=1;
            var rata = (data2[i]+data2[i+1]+data2[i+2])/3;
            var ratas = data2[i]+data2[i+1]+data2[i+2];

              minD = Math.min(data2[i],data2[i+1],data2[i+2]);
              maxD = Math.max(data2[i],data2[i+1],data2[i+2]);
              delta = maxD-minD;

              var r = data2[i];
              var g = data2[i+1];
              var b = data2[i+2];
              var ri = data2[i]/ratas;
              var gi = data2[i+1]/ratas;
              var bi = data2[i+2]/ratas;
              I = rata;
              if (r == g && g == b)
              {
                H = 0;
                S = 0;
              }
              else
              {
                var w = 0.5 *((r-g)+(r-b))/Math.sqrt(((r-g)*(r-g))+((r-b)*(g-b)))
                if (w>1)
                {
                  w=1;
                }
                if(w<-1)
                {
                  w=-1;
                }
                H=Math.acos(w);
                if (b>g)
                {
                  H=2*Math.PI-H;
                  H=H*180/Math.PI;
                }
                S=(1-(3*Math.min(ri,gi,bi)))*100;
              }
              R+=ri;
              G+=gi;
              B+=bi;
              Htotal+=H;
              Stotal+=S;
              Itotal+=I;
          }    
      }
      $('#inpRed').val(pixels);
      $('#inpGreen').val(G/pixels);
      $('#inpBlue').val(B/pixels);
      $('#inpHue').val(Htotal/pixels);
      $('#inpSatur').val(Stotal/pixels);
      $('#inpInten').val(Itotal/pixels);
    }
    var grayscalebtn = document.getElementById('grayscalebtn');
    grayscalebtn.addEventListener('click', histogram);
    var rgb = document.getElementById('rgbBtn');
    rgbBtn.addEventListener('click', hsi);
  }
</script>