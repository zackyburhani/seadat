<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--link rel="icon" href="../../../../favicon.icon"-->

  <title>Seadat</title>

  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="dist/css/font-awesome.min.css" rel="stylesheet">
  <link href="dist/css/login.css" rel="stylesheet">
  <link rel="stylesheet" href="dist/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Seadat</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><i class="fa fa-home" style="font-size:20px"></i> <span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="story.html">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.html">Form Berlangganan</a>
        </li> -->
        <li class="nav-item">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="padding-right:160px; margin-left:240px;">
            <button class="btn btn-default search" type="button" style="cursor:pointer;"><i class="fa fa-search"></i></button>
            <a href="customer_pembayaran.php" style="margin-left : 100px; font-size : 25px; color : white">
              <i class="fa fa-shopping-cart"></i>
              <span class="badge badge-danger">2</span>
            </a>
          </form>
        </li>
      </ul>
      <div class="row">
        <div class="col-md-6">
          <a class="nav-link btn btn-primary my-2 my-sm-0" href="#" ole="button" data-toggle="modal" data-target="#login">Masuk</a>
        </div>
        <div class="col-md-6">
          <a class="nav-link btn btn-primary my-2 my-sm-0" href="#" ole="button" data-toggle="modal" data-target="#daftar">Daftar</a>
        </div>

      </div>
      </div>
  </nav>

  <!-- BEGIN # MODAL LOGIN -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
  		<div class="modal-content">
  			<div class="modal-header" align="center">
  				<img class="img-circle" id="img_logo" src="">
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  						<span class="glyphicon glyphicon-remove" aria-hidden="true">&times;</span>
  				</button>
  			</div>
      	<div id="div-forms">
          <form id="login-form">
  		      <div class="modal-body">
							<center><b><h4 style="font-family: 'Lato', serif;">Selamat Datang</h4></b></center>
							<hr>
							<div class="form-group">
								<input id="login_username" class="form-control" type="text" placeholder="Username" required>
								<input id="login_password" class="form-control" type="password" placeholder="Password" required>
							</div>
						 <div class="form-group"><label>Masuk Sebagai</label>
								<select class="form-control" name="auth">
									<option value="penyewa">penyewa</option>
									<option value="customer">customer</option>
								</select>
							</div>
							<hr>
						</div>

  				  <div class="modal-footer">
  	        	<div>
  	        		<button type="submit" class="btn btn-info btn-block"><i class="fa fa-sign-in"></i> Login</button>
  	        	</div>
  						<div>
  	            <button id="login_lost_btn" type="button" class="btn btn-link">Lupa Password?</button>
  	      		</div>
  				  </div>
        	</form>
        	<form id="lost-form" style="display:none;">
      	    <div class="modal-body">
  		    		<div id="div-lost-msg">
                <div id="icon-lost-msg" class="margin-bottom-20 glyphicon glyphicon-chevron-right"></div>
                  <span id="text-lost-msg">Masukkan Email Anda !</span>
              </div>
  		    			<input id="lost_email" class="form-control" type="text" placeholder="E-mail" required>
            </div>
  		    	<div class="modal-footer">
    					<div>
                <button type="submit" class="btn btn-info btn-block"><i class="fa fa-paper-plane"></i> Kirim</button>
              </div>
              <div>
              	<button id="lost_login_btn" type="button" class="btn btn-link">Masuk</button>
              </div>
  		    	</div>
        	</form>
  			</div>
      </div>
  	</div>
  </div>
  <!-- END # MODAL LOGIN -->

  <!-- Modal SIGN UP -->
  <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
				<div class="modal-header" align="center">
  				<img class="img-circle" id="img_logo" src="">
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  						<span class="glyphicon glyphicon-remove" aria-hidden="true">&times;</span>
  				</button>
        </div>
        <div class="modal-body">
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="modal-body">
							<center><b><h4>Daftar Sebagai</h4></b></center>
							<hr>
                <div class="form-group"><label></label>
                  <a href="daftarCustomer.php" style="color:white" class="btn btn-info btn-block"><i class="fa fa-users"></i> Customer
                  </a>
                   <a href="daftarPenjual.php" style="color:white" class="btn btn-success btn-block"><i class="fa fa-user"> </i> Penjual</a>
                </div>
							<hr>
              </div>
        		</div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal SIGN UP CUSTOMER -->
    <div class="modal fade" id="customer" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
          <img class="img-circle" id="img_logo" src="">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="glyphicon glyphicon-remove" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="modal-body">
              <center><b><h4>Isi Data Diri Lengkap</h4></b></center>
              <hr>
              <div class="form-group"><label>Username</label>
                <input required class="form-control required text-capitalize" placeholder="Input Nama Petani" data-placement="top" data-trigger="manual" type="text" name="username">
              </div>

              <div class="form-group">
                <label>E-mail</label>
                <input required class="form-control required" placeholder="E-mail" data-placement="top" data-trigger="manual" type="text" name="email"s>
              </div>

              <div class="form-group">
                <label>Password</label>
                <input required class="form-control required" placeholder="Password" data-placement="top" data-trigger="manual" type="text" name="password">
              </div>

              <div class="form-group">
                <label>Konfirmasi Password</label>
                <input required class="form-control required" placeholder="Konfirmasi Password" data-placement="top" data-trigger="manual" type="text" name="password2">
              </div>

              <div class="form-group"><label>Nama Lengkap</label>
                <input required class="form-control" placeholder="Nama Lengkap" data-placement="top" data-trigger="manual" type="text" name="nm_customer">
              </div>

              <div class="form-group"><label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="perempuan">Perempuan</option>
                  <option value="lakilaki">Laki-Laki</option>
                </select>
              </div>

              <div class="form-group"><label>Alamat</label>
                <textarea class="form-control" name="alamat" required></textarea>
              </div>

               <div class="form-group">
                <label>Nomor Telepon</label>
                <input required class="form-control required" placeholder="Nomor Telepon" data-placement="top" data-trigger="manual" type="text" name="no_telp" id="no_telp" maxlength="13">
              </div>

                <div class="form-group">
                  <label>Kode Pos</label>
                  <input required class="form-control required" placeholder="Nomor Telepon" data-placement="top" data-trigger="manual" type="text" name="kodepos">
                </div>
                <hr>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>Close</button>
                <button type="submit" class="btn btn-info"><i class="fa fa-save" href="index.php"></i> Simpan</button>
              </div>
            </div>
            <!-- END MODAL SIGN UP CUSTOMER -->
          </form>
        </div>
      </div>
    </div>
    <!-- Modal SIGN UP PENJUAL -->
    <div class="modal fade" id="penjual" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
          <img class="img-circle" id="img_logo" src="">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="glyphicon glyphicon-remove" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="modal-body">
              <center><b><h4>Isi Data Diri Lengkap</h4></b></center>
              <hr>
              <div class="form-group"><label>Username</label>
                <input required class="form-control required text-capitalize" placeholder="Input Nama Petani" data-placement="top" data-trigger="manual" type="text" name="username">
              </div>

              <div class="form-group">
                <label>E-mail</label>
                <input required class="form-control required" placeholder="E-mail" data-placement="top" data-trigger="manual" type="text" name="email"s>
              </div>

              <div class="form-group">
                <label>Password</label>
                <input required class="form-control required" placeholder="Password" data-placement="top" data-trigger="manual" type="text" name="password">
              </div>

              <div class="form-group">
                <label>Konfirmasi Password</label>
                <input required class="form-control required" placeholder="Konfirmasi Password" data-placement="top" data-trigger="manual" type="text" name="password2">
              </div>

              <div class="form-group"><label>Nama Lengkap</label>
                <input required class="form-control" placeholder="Nama Lengkap" data-placement="top" data-trigger="manual" type="text" name="nm_customer">
              </div>

              <div class="form-group"><label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="perempuan">Perempuan</option>
                  <option value="lakilaki">Laki-Laki</option>
                </select>
              </div>

              <div class="form-group"><label>Alamat</label>
                <textarea class="form-control" name="alamat" required></textarea>
              </div>

               <div class="form-group">
                <label>Nomor Telepon</label>
                <input required class="form-control required" placeholder="Nomor Telepon" data-placement="top" data-trigger="manual" type="text" name="no_telp" id="no_telp" maxlength="13">
              </div>

                <div class="form-group">
                  <label>Nama Toko</label>
                  <input required class="form-control required" placeholder="Nama Toko" data-placement="top" data-trigger="manual" type="text" name="namatoko">
                </div>
                <hr>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>Close</button>
                <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal SIGN UP PENJUAL -->
  </div>
</div>
</body>
</html>
