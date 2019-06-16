<link rel="stylesheet" type="text/css" href="<?php echo base_url('')?>assets/DataTables/datatables.css">
<script type="text/javascript" charset="utf8" src="<?php echo base_url('')?>assets/DataTables/datatables.js"></script>
<center><h2>DATASET PISANG</h2></center>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Set Pisang Matang</h4>
      <div class="table-responsive">
        <table class="table table-bordered" id="tblMatang">
          <thead>
            <tr>
              <th width="1%">#</th>
              <!-- <th width="3%">Image</th> -->
              <th>Hue</th>
              <th>Saturation</th>
              <th>Intensity</th>
              <th>Contrast</th>
              <th>Homogen</th>
              <th>Energy</th>
              <th>Entropy</th>
              <th>Corelation</th>
              <th>Keterangan</th>
              <th>prediksi</th>
              <th></th> 
            </tr>
          </thead>
          <tbody>
          	<?php $i=1; foreach ($dataMatang as $key){?>
            <tr>
              <td><?php echo $i ?></td>
              <!-- <td align="center"><img src="<?php echo $key->nama_file ?>" class="img img-responsive"></td> -->
              <td><?php echo $key->hue ?></td>
              <td><?php echo $key->saturation ?></td>
              <td><?php echo $key->intensity ?></td>
              <td><?php echo $key->contras ?></td>
              <td><?php echo $key->homogenity ?></td>
              <td><?php echo $key->energy ?></td>
              <td><?php echo $key->entropy ?></td>
              <td><?php echo $key->corelation?></td>
              <td><?php echo $key->kematangan ?></td>
              <td><?php echo $key->prediksi ?></td>
              <td><a style="color: white" class="btn btn-large btn-danger" onclick="deletes(<?php echo  $key->id_dataset  ?>)">Delete</a></td>
            </tr>
            <?php $i++;} ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Set Pisang Setengah Matang</h4>
      <div class="table-responsive">
        <table class="table table-bordered" id="tblSetmatang">
          <thead>
            <tr>
              <th width="1%">#</th>
              <!-- <th width="3%">Image</th> -->
              <th>Hue</th>
              <th>Saturation</th>
              <th>Intensity</th>
              <th>Contrast</th>
              <th>Homogen</th>
              <th>Energy</th>
              <th>Entropy</th>
              <th>Corelation</th>
              <th>Keterangan</th>
              <th>prediksi</th>
              <th></th> 
            </tr>
          </thead>
          <tbody>
            <?php $i=1; foreach ($datasetMatang as $key){?>
            <tr>
              <td><?php echo $i ?></td>
              <!-- <td align="center"><img src="<?php echo $key->nama_file ?>" class="img img-responsive"></td> -->
              <td><?php echo $key->hue ?></td>
              <td><?php echo $key->saturation ?></td>
              <td><?php echo $key->intensity ?></td>
              <td><?php echo $key->contras ?></td>
              <td><?php echo $key->homogenity ?></td>
              <td><?php echo $key->energy ?></td>
              <td><?php echo $key->entropy ?></td>
              <td><?php echo $key->corelation?></td>
              <td><?php echo $key->kematangan ?></td>
              <td><?php echo $key->prediksi ?></td>
              <td><a style="color: white" class="btn btn-large btn-danger" onclick="deletes(<?php echo  $key->id_dataset  ?>)">Delete</a></td>
            </tr>
            <?php $i++;} ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Set Pisang Mentah</h4>
      <div class="table-responsive">
        <table class="table table-bordered" id="tblMentah">
          <thead>
            <tr>
              <th width="1%">#</th>
              <!-- <th width="3%">Image</th> -->
              <th>Hue</th>
              <th>Saturation</th>
              <th>Intensity</th>
              <th>Contrast</th>
              <th>Homogen</th>
              <th>Energy</th>
              <th>Entropy</th>
              <th>Corelation</th>
              <th>Keterangan</th>
              <th>prediksi</th>
              <th></th> 
            </tr>
          </thead>
          <tbody>
            <?php $i=1; foreach ($dataMentah as $key){?>
            <tr>
              <td><?php echo $i ?></td>
              <!-- <td align="center"><img src="<?php echo $key->nama_file ?>" class="img img-responsive"></td> -->
              <td><?php echo $key->hue ?></td>
              <td><?php echo $key->saturation ?></td>
              <td><?php echo $key->intensity ?></td>
              <td><?php echo $key->contras ?></td>
              <td><?php echo $key->homogenity ?></td>
              <td><?php echo $key->energy ?></td>
              <td><?php echo $key->entropy ?></td>
              <td><?php echo $key->corelation?></td>
              <td><?php echo $key->kematangan ?></td>
              <td><?php echo $key->prediksi ?></td>
              <td><a style="color: white" class="btn btn-large btn-danger" onclick="deletes(<?php echo  $key->id_dataset  ?>)">Delete</a></td>
            </tr>
            <?php $i++;} ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready( function () {
    $('#tblMatang').DataTable();
    $('#tblSetmatang').DataTable();
    $('#tblMentah').DataTable();
  });
</script>
<script>
    function deletes(id){
    //alert("delete Data "+id);
    $.ajax({
        type: "POST",
        url: 'http://localhost/bananaApi/index.php/dataset/delete',
        data: {id_dataset:id},
        dataType: 'json',
        success : function(response){
          location.replace("<?php echo site_url('dataset') ?>");
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          alert("some error");
        }
      });
  };
</script>