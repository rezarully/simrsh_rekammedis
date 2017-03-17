<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RSH Prof. Soeparwi | Ubah Password</title>

    <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/dashboard.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/daterangepicker-bs3.css"); ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/moment.js"); ?>"></script>  
    <script type="text/javascript" src="<?php echo base_url("style/js/daterangepicker.js"); ?>"></script>

  </head>

  <body>
    <?php $this->load->view('menu_view'); ?>
    <!-- RIWAYAT PASIEN BAG. TABEL -->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h4 style="text-align:left">Ubah Password</h4>
      <hr>
      <form action="<?php echo base_url("index.php/rekammedis/change_password_process");?>" method="POST">
      <br>
      <div class="form-horizontal">
        <div class="form-group">
            <label class="col-md-2">Password Lama</label>
            <div class="col-md-3">
              <input type="text" name="pass_lama" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2">Password Baru</label>
            <div class="col-md-3">
              <input type="text" name="pass_baru" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2">Ulangi Password Baru</label>
            <div class="col-md-3">
              <input type="text" name="ulangpass_baru" class="form-control">
            </div>
        </div>
      </div>

      <br>
      <div class="form-actions pull-left">
        <button class="btn btn-primary" type="submit" name="submit" value="submit">Simpan</button>
        <button class="btn btn-default" type="reset">Batal</button>
      </div>
    </form>
    </div>
        
  </body>
</html>
