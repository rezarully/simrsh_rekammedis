<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar Rekam Medis</title>

    <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/dashboard.css"); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.min.js"); ?>"></script>

  </head>

  <body>

  <?php $this->load->view('menu_view'); ?>

    <!-- RIWAYAT PASIEN BAG. DATA DIRI -->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h4 style="text-align:left">Daftar Rekam Medis</h4>
        <hr>
          <div class="col-md-6">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="caripasien" class="col-md-4">Cari Pasien</label>
                  <div class="form-group">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="No. RM/Nama Pasien">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button">Cari</button>
                        </span>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="noregistrasi" class="col-md-4">No. Registrasi</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" id="noregistrasi">
                </div>
              </div>
              <div class="form-group">
                <label for="norm" class="col-md-4">No. Rekam Medis</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" id="norm">
                </div>
              </div>
              <div class="form-group">
                <label for="namapemilik" class="col-md-4">Nama Pemilik</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" id="namapemilik">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="namahewan" class="col-md-4">Nama Hewan</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" id="namahewan">
                </div>
              </div>
              <div class="form-group">
                <label for="jenishewan" class="col-md-4">Jenis Hewan</label>
                <div class="col-md-5">
                  <input type="text" class="form-control" id="jenishewan">
                </div>
              </div>
              <div class="form-group">
                <label for="signalemen" class="col-md-4">Signalemen</label>
                <div class="col-md-3">
                  <input type="text" class="form-control" name="signalementtl" id="signalementtl">
                </div>
                <div class="col-md-2">
                  <input type="text" class="form-control" name="siganlemenkelamin" id="siganelemenkelamin">
                </div>
              </div>
            </form>
          </div>
    </div>
    <!-- RIWAYAT PASIEN BAG. TABEL -->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <hr>
      <br>
        <div class="table-responsive">
          <table class="table table-bordered" style="width:100%">
            <thead>
              <tr>
                  <th>Waktu</th>
                  <th>No. Registrasi</th>
                  <th>No. Rekam Medis</th>
                  <th>Dokter</th>
                  <th>Nama Hewan</th>
                  <th>Diagnosa</th>
                  <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#">Detail</a> | <a href="#">Cetak</a></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#">Detail</a> | <a href="#">Cetak</a></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#">Detail</a> | <a href="#">Cetak</a></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </body>
</html>