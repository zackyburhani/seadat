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
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!--START CONTENT LABEL-->
      <div class="callout callout-info">
        <div class="row">
          <div class="form-group">
              <div class="col-md-4">
                <h4 style="margin-top: 20px;">Selamat Datang Admin !</h4>
              </div>
          </div>
        </div>
      </div>
      <!--EDN CONTENT LABEL-->

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>150</h3>

              <p>Data Barang</p>
            </div>
            <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>

              <p>Data Peminjaman</p>
            </div>
            <div class="icon">
              <i class="fa fa-inbox"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Data Pengembalian</p>
            </div>
            <div class="icon">
              <i class="fa fa-cube"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

  <?php include'template/footer.php' ?>
