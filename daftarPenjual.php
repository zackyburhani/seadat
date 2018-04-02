<?php include'header2.php' ?>

  <div class="container" style="padding-left : 100px;padding-right : 100px;">
    <div class="col-md-12 box" style="margin-top : 20px; ">
      <div class="card">
        <form method="POST" action="" enctype="multipart/form-data">
          <div class="modal-body">
            <center><b><h4>Isi Data Diri Lengkap</h4></b></center>
            <hr>
            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Username</label>
                </div>
                <div class="col-md-1">
                  <label>:</label>
                </div>
                <div class="col-md-8">
                  <input required class="form-control required text-capitalize" placeholder="Input Username" data-placement="top" data-trigger="manual" type="text" name="username">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>E-mail</label>
                </div>
                <div class="col-md-1">
                  <label>:</label>
                </div>
                <div class="col-md-8">
                <input required class="form-control required" placeholder="E-mail" data-placement="top" data-trigger="manual" type="text" name="email"s>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Password</label>
                </div>
                <div class="col-md-1">
                  <label>:</label>
                </div>
                <div class="col-md-8">
                  <input required class="form-control required" placeholder="Password" data-placement="top" data-trigger="manual" type="text" name="password">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Konfirmasi Password</label>
                </div>
                <div class="col-md-1">
                  <label>:</label>
                </div>
                <div class="col-md-8">
                  <input required class="form-control required" placeholder="Konfirmasi Password" data-placement="top" data-trigger="manual" type="text" name="password2">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Nama Lengkap</label>
                </div>
                <div class="col-md-1">
                  <label>:</label>
                </div>
                <div class="col-md-8">
                  <input required class="form-control" placeholder="Nama Lengkap" data-placement="top" data-trigger="manual" type="text" name="nm_customer">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Nama Toko</label>
                </div>
                <div class="col-md-1">
                  <label>:</label>
                </div>
                <div class="col-md-8">
                  <input required class="form-control" placeholder="Nama Lengkap" data-placement="top" data-trigger="manual" type="text" name="nm_customer">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Alamat</label>
                </div>
                <div class="col-md-1">
                  <label>:</label>
                </div>
                <div class="col-md-8">
                  <textarea class="form-control" name="alamat" required></textarea>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Nomor Telepon</label>
                </div>
                <div class="col-md-1">
                  <label>:</label>
                </div>
                <div class="col-md-8">
                  <input required class="form-control required" placeholder="Nomor Telepon" data-placement="top" data-trigger="manual" type="text" name="no_telp" id="no_telp" maxlength="13">
                </div>
              </div>
            </div>

            <hr>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>Close</button>
              <button type="submit" class="btn btn-info"><i class="fa fa-save" href="index.php"></i> Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include 'footer.php';?>
