<?php 
  $totdat=$dataScatter->jumMentah + $dataScatter->jumSet + $dataScatter->jumMatang;
  $prsMentah=$dataScatter->jumMentah/$totdat*100;
  $prsSetMat=$dataScatter->jumSet/$totdat*100;
  $prsMatang=$dataScatter->jumMatang/$totdat*100;
?>
<link href="<?php echo base_url('')?>assets/css/toggle.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('')?>assets/DataTables/datatables.css">
<script type="text/javascript" charset="utf8" src="<?php echo base_url('')?>assets/DataTables/datatables.js"></script>
<script src="<?php echo base_url(); ?>assets/js/echarts.min.js"></script>
<div class="col-lg-12 ">
  <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-database text-success icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Pisang Mentah</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0"> <?php echo $dataScatter->jumMentah ?> Buah</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0">
            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> <?php echo round($prsMentah,2); ?>% dari seluruh Dataset
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-database icon-lg" style="color:#cef442"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Pisang Setengah Matang</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0"> <?php echo $dataScatter->jumSet ?> Buah</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0">
            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> <?php echo round($prsSetMat,2); ?>% dari seluruh Dataset
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-database text-warning icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Pisang Matang</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0"> <?php echo $dataScatter->jumMatang ?> Buah</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0">
            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> <?php echo round($prsMatang,2); ?>% dari seluruh Dataset
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <i class="mdi mdi-database text-info icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Total Dataset</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0"> <?php echo $totdat ?> Buah</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0">
            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>100% dari seluruh Dataset
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div id="echart" style="height: 300px;">
       
      </div>
      <div><span>Mentah : <?php echo $dataScatter->jumMentah ?> | </span><span>Setengah matang : <?php echo $dataScatter->jumSet ?> | </span><span>Matang : <?php echo $dataScatter->jumMatang ?> </span></div> 
    </div>
  </div>
</div>

<div class="col-lg-12 ">
  <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <center><h3>Metode GLCM</h3></center>
          <br>
          <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pull-right">
              <h2 style="text-align-last: right;">OFF</h2>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <center><label class="switch">
                <input type="checkbox" <?php if ($datametode[0]->nilai==1){echo "checked";}?> id="toggle-glcm">
                <span class="slider round"></span>
              </label>
              </center>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pull-left">
              <h2>ON</h2>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0">
            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i><span id="status-glcm"><?php if ($datametode[0]->nilai==1){echo "Metode Aktif";}else{echo "Metode Tidak Aktif";}?></span>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <center><h3>Metode HSI</h3></center>
          <br>
          <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pull-right">
              <h2 style="text-align-last: right;">OFF</h2>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <center><label class="switch">
                <input type="checkbox" <?php if ($datametode[1]->nilai==1){echo "checked";}?> id="toggle-hsi">
                <span class="slider round"></span>
              </label>
              </center>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 pull-left">
              <h2>ON</h2>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0">
            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i><span id="status-hsi"><?php if ($datametode[1]->nilai==1){echo "Metode Aktif";}else{echo "Metode Tidak Aktif";}?></span>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <center><h3>Metode K-NN</h3></center>
          <div style="text-align-last: : center;">
              <center class="text-success" id="status-knn"></center>
          </div>
          <br>
          <div class="row">
            <div class="input-group col-lg-12">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-default" type="button">Nilai K</button>
              </span>
              <input type="number" id="input-knn" class="form-control file-upload-info"  min="1" max="5" required="" value="<?php echo $datametode[2]->nilai ?>">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-success" id="button-upd" type="button">Update</button>
              </span>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0">
            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i><span id="status">Nilai K = 3</span>
          </p>
        </div>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
// when clicking the button, toggle the checkbox
  $("#toggle-glcm").change(function() {
    if(document.getElementById('toggle-glcm').checked){
      $.ajax({
        type: "POST",
        url: 'http://localhost/bananaApi/index.php/metode',
        data: {id_metode:1,nilai:1},
        dataType: 'json',
        success : function(response){
          $("#status-glcm").html(response.status);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          alert("some error");
        }
      });
    }
    else{
      $.ajax({
        type: "POST",
        url: 'http://localhost/bananaApi/index.php/metode',
        data: {id_metode:1,nilai:0},
        dataType: 'json',
        success : function(response){
          $("#status-glcm").html(response.status);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          alert("some error");
        }
      });
    }
  });

   $("#toggle-hsi").change(function() {
    if(document.getElementById('toggle-hsi').checked){
      $.ajax({
        type: "POST",
        url: 'http://localhost/bananaApi/index.php/metode',
        data: {id_metode:2,nilai:1},
        dataType: 'json',
        success : function(response){
          $("#status-hsi").html(response.status);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          alert("some error");
        }
      });
    }
    else{
      $.ajax({
        type: "POST",
        url: 'http://localhost/bananaApi/index.php/metode',
        data: {id_metode:2,nilai:0},
        dataType: 'json',
        success : function(response){
          $("#status-hsi").html(response.status);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          alert("some error");
        }
      });
    }
  });

  function knnUpd(){
    var nilai =$("#input-knn").val();
    if (nilai>0 && nilai<6 ) {
      $.ajax({
          type: "POST",
          url: 'http://localhost/bananaApi/index.php/metode',
          data: {id_metode:3,nilai:nilai},
          dataType: 'json',
          success : function(response){
            $("#status-knn").html("update sukses");
            setInterval(function(){$("#status-knn").html("");}, 2000);
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("some error");
          }
        });
    }
    else{
      $("#status-knn").html("Gagal, Minimum 1 Maksimal 5");
    }
  }

  var btnUpd=document.getElementById('button-upd');
  btnUpd.addEventListener("click",knnUpd);
</script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#tblMatang').DataTable();
    $('#tblSetmatang').DataTable();
    $('#tblMentah').DataTable();

  var chart = document.getElementById('echart');
  var myChart = echarts.init(chart);
  
  var option = {
    title : {
        text: 'PERSEBARAN DATASET PISANG',
        subtext: 'dataset pisang : 2019 - Nafianta Budi P'
    },
    tooltip : {
        trigger: 'axis',
        showDelay : 0,
        formatter : function (params) {
            if (params.value.length > 1) {
                return params.seriesName + ' :<br/>'
                   + params.value[0] + 'HSI ' 
                   + params.value[1] + 'GLCM ';
            }
            else {
                return params.seriesName + ' :<br/>'
                   + params.name + 'HSI: '
                   + params.value + 'GLCM ';
            }
        },  
        axisPointer:{
            show: true,
            type : 'cross',
            lineStyle: {
                type : 'dashed',
                width : 1
            }
        }
    },
    legend: {
        data:['sdf','sd','as']
    },
    toolbox: {
        show : true,
        feature : {
            saveAsImage : {show: true}
        }
    },
    xAxis : [
        {
            type : 'value',
            scale:true,
            axisLabel : {
                formatter: '{value} HSI'
            }
        }
    ],
    yAxis : [
        {
            type : 'value',
            scale:true,
            axisLabel : {
                formatter: '{value} GLCM'
            }
        }
    ],
    series : [
        {
            name:'Matang',
            type:'scatter',
            // data: [[161.2, 51.6], [167.5, 59.0], [159.5, 49.2], [157.0, 63.0], [155.8, 53.6]],
            itemStyle: {normal: {color: '#FFd000'}},
            data: [<?php echo $dataScatter->matang ?>],
            markPoint : {
                data : [
                    {type : 'max', name: 'Matang'},
                    {type : 'min', name: 'Matang'}
                ]
            },
            markLine : {
                data : [
                    {type : 'average', name: 'Matang'}
                ]
            }
        },
        {
            name:'Setengah',
            type:'scatter',
            itemStyle: {normal: {color: '#cef442'}},
            data: [<?php echo $dataScatter->setengah ?>],
            markPoint : {
                data : [
                    {type : 'max', name: 'Setengah'},
                    {type : 'min', name: 'Setengah'}
                ]
            },
            markLine : {
                data : [
                    {type : 'average', name: 'Setengah'}
                ]
            }
        },
        {
            name:'Mentah',
            type:'scatter',
            itemStyle: {normal: {color: '#386303'}},
            data: [<?php echo $dataScatter->mentah ?>],
            markPoint : {
                data : [
                    {type : 'max', name: 'Mentah'},
                    {type : 'min', name: 'Mentah'}
                ]
            },
            markLine : {
                data : [
                    {type : 'average', name: 'Mentah'}
                ]
            }
        }
    ]
};
                    

  myChart.setOption(option);
} );
</script>