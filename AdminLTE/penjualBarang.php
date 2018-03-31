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
        <li class="active">Barang</li>
      </ol>
    </section>
    <!--END Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="panel panel-default">
        <div class="panel-body"><h4><i class="fa fa-archive"></i> Data Barang</h4></div>
      </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
          <button class="btn btn-default" data-toggle="modal" href="#" data-target="#entryBarangModal"><i class="fa fa-plus"></i></button> Tambah Data Barang
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <table style="table-layout:fixed" class="table table-striped table-bordered table-hover" id="datatablebarang">
              <thead>
                <tr>
                  <th align="center;">No.</th>
                  <th>Nama Barang</th>
                  <th>Size</th>
                  <th>Stok</th>
                  <th>Harga Sewa</th>
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

  <!-- START MODAL -->
  <div class="modal fade" id="entryBarangModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><div class="icon"><i class="fa fa-archive"></i> Tambah Data Barang</div></h4>
        </div>
        <form method="POST" action="" enctype="multipart/form-data">
          <div class="modal-body">

            <div class="form-group"><label>Nama Barang</label>
              <input required class="form-control required text-capitalize" placeholder="Input Nama Barang" data-placement="top" data-trigger="manual" type="text" name="nm_barang">
            </div>

            <div class="form-group"><label>Size</label>
              <div class="row">
                <div class="form-check col-md-1">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="s">
                  <label class="form-check-label" for="inlineCheckbox1">S</label>
                </div>
                <div class="form-check col-md-1">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="m">
                  <label class="form-check-label" for="inlineCheckbox2">M</label>
                </div>
                <div class="form-check col-md-1">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="l">
                  <label class="form-check-label" for="inlineCheckbox3">L</label>
                </div>
                <div class="form-check col-md-1">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="xl">
                  <label class="form-check-label" for="inlineCheckbox3">XL</label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Stok</label>
                <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Input Stok" data-placement="top" data-trigger="manual" type="text" name="stok">
            </div>

            <div class="form-group">
              <label>Harga Sewa</label>
              <div class="input-group input-group">
                <span class="input-group-addon" id="sizing-addon1">Rp.</span>
                <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Input Harga Sewa" data-placement="top" data-trigger="manual" type="text" name="harga">
              </div>
            </div>

            <div class="form-group">
              <label>Gambar</label>
              <input required data-placement="top" data-trigger="manual" type="file" name="gambar">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
            <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END MODAL -->

  <?php include'template/footer.php' ?>
