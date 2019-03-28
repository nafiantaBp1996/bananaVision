<link rel="stylesheet" type="text/css" href="<?php echo base_url('')?>assets/DataTables/datatables.css">
<script type="text/javascript" charset="utf8" src="<?php echo base_url('')?>assets/DataTables/datatables.js"></script>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Set Pisang</h4>
      <div class="table-responsive">
        <table class="table table-bordered" id="myTable">
          <thead>
            <tr>
              <th width="1%">#</th>
              <th width="3%">Image</th>
              <th>Hue</th>
              <th>Saturation</th>
              <th>Intensity</th>
              <th>Contrast</th>
              <th>Homogen</th>
              <th>Energy</th>
              <th>Entropy</th>
              <th>Keterangan</th> 
            </tr>
          </thead>
          <tbody>
          	<?php $i=1; foreach ($dataset as $key){?>
            <tr>
              <td><?php echo $i ?></td>
              <td align="center"><img src="<?php echo $key->nama_file ?>" class="img img-responsive"></td>
              <td><?php echo $key->hue ?></td>
              <td><?php echo $key->saturation ?></td>
              <td><?php echo $key->intensity ?></td>
              <td><?php echo $key->contras ?></td>
              <td><?php echo $key->homogenity ?></td>
              <td><?php echo $key->energy ?></td>
              <td></td>
              <td><?php echo $key->kematangan ?></td>
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
    $('#myTable').DataTable();
} );
</script>