<?php include 'header.php';?>

  <div class="container">
    <h2 align="center" style="margin-top:30px;">PEMBAYARAN</h2>
    <hr>
  </div>

  <!-- START PEMBAYARAN -->
  <div class="container" id="pembayaran">
    <div class="card bg-light mb-3">
      <div class="card-header">
        <i class="fa fa-money"></i>
      </div>
      <div class="card-body">
        <div class="container mb-4">
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col" class="text-center">No.</th>
                      <th scope="col" class="text-center">Nama Barang</th>
                      <th scope="col" class="text-center">Tangga Pinjam</th>
                      <th scope="col" class="text-center">Tanggal Jatuh Tempo</th>
                      <th scope="col" class="text-center">Jumlah Pinjam</th>
                      <th scope="col" class="text-center">Harga</th>
                      <th scope="col" class="text-center">Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">1.</td>
                      <td>Kostum Adat Sunda</td>
                      <td class="text-center">12/12/2018</td>
                      <td class="text-center">20/12/2018</td>
                      <td class="text-center">20</td>
                      <td class="text-left">Rp. 250.000</td>
                      <td class="text-center"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                    </tr>
                    <tr>
                      <td class="text-center">2.</td>
                      <td>Kostum Adat Betawi</td>
                      <td class="text-center">12/12/2018</td>
                      <td class="text-center">20/12/2018</td>
                      <td class="text-center" >20</td>
                      <td class="text-left">Rp. 250.000</td>
                      <td class="text-center"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>Shipping</td>
                      <td colspan="2" class="text-left">Rp. 20.000</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><strong>Total</strong></td>
                      <td colspan="2" class="text-left"><strong>Rp. 520.000</strong></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col mb-2">
              <div class="row">
                <div class="col-sm-12 col-md-6 text-right">
                  <button class="btn btn-block btn-danger text-uppercase"><i class="fa fa-shopping-cart"></i> Sewa barang lain</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                  <button class="btn btn-block btn-success text-uppercase"><i class="fa fa-money"></i> Sewa Sekarang</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END PEMBAYARAN -->

<div class="container" id="garis_pembayaran">
  <hr class="featurette-divider">
</div>

<?php include 'footer.php';?>
