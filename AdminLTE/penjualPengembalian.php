<?php include'template/headerPenjual.php' ?>
<?php include'template/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengembalian</li>
      </ol>
    </section>
    <!--END Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="panel panel-default">
        <div class="panel-body"><h4><i class="ion ion-cube"></i> Data Pengembalian</h4></div>
      </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <!-- /.panel-heading -->
          <div class="panel-body">
            <table style="table-layout:fixed" class="table table-striped table-bordered table-hover" id="datatablebarang">
              <thead>
                <tr>
                  <th width="100px">No.Transaksi</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Sewa</th>
                  <th>tanggal Peminjaman</th>
									<th>Tanggal Pengembalian</th>
                  <th width="50px"> <center>Action</center> </th>
                </tr>
              </thead>
              <tbody>
                <!-- <?php foreach($dataPetani as $data){?>
                <tr>
                  <td><?php echo $data->id_petani;?></td>
                  <td><?php echo $data->nm_petani;?></td>
                  <td><?php echo $data->tgl_lahir;?></td>
                  <td><?php echo $data->alamat;?></td>
                  <td><?php echo $data->no_telp;?></td>
                  <td><a class="btn btn-warning btn-circle" id="editPetani" data-id='$data->id_petani' onclick="edit(<?php echo $data->id_petani;?>)" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> </a></td>
                  <td><a href="<?php blink('Admin/hapusPetani/'.$data->id_petani)?>" onclick="return konfirmasi()" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                <?php } ?> -->
              </tbody>
            </table>

          <!-- /.panel body -->
          </div>
        <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
        </div>

      </section>
      <!-- right col -->

  </div>
  <!-- /.row (main row) -->

  <?php include'template/footer.php' ?>
