<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar Antrian</title>

    <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/dashboard.css"); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.min.js"); ?>"></script>

  </head>

  <body>

  <?php $this->load->view('menu_view'); ?>
    <!-- RIWAYAT PASIEN BAG. TABEL -->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h4 style="text-align:left">Daftar Antrian</h4>
      <hr>
      <form class="form-horizontal">
        <div class="form-group">
          <div class="col-lg-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="No. RM/Nama Pasien">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Cari</button>
              </span>
            </div>
          </div>
        </div>
      </form>
      <div class="table-responsive">
        <table class="table table-bordered" style="width:100%">
          <thead>
            <tr>
                <th>Waktu</th>
                <th>No. Registrasi</th>
                <th>No. Rekam Medis</th>
                <th>Nama Pemilik</th>
                <th>Nama Hewan</th>
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
              <td><a href="#">Pendaftaran</a></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><a href="#">Pendaftaran</a></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><a href="#">Pendaftaran</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>