<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laporan</title>

    <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/dashboard.css"); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.min.js"); ?>"></script>

  </head>

  <body>

  <?php $this->load->view('menu_view'); ?>
    <!-- RIWAYAT PASIEN BAG. TABEL -->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h4 style="text-align:left">Laporan</h4>
      <hr>
      <form class="form-horizontal">
        <div class="form-group">
          <div class="col-md-2">
            Periode Tanggal
          </div>
        </div>
            <div class="input-group date">
              <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
            </div>x
      </form>
    </div>
  </body>
</html>