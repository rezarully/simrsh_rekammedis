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
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/dataTables.bootstrap.min.css">  
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/responsive.bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url();?>style/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>style/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>style/js/dataTables.responsive.min.js"></script>

  </head>

  <body>

  <?php $this->load->view('menu_view'); ?>

    <!-- RIWAYAT PASIEN BAG. DATA DIRI -->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h4 style="text-align:left">Daftar Rekam Medis</h4>
        <hr>
          <form class="form-horizontal">
            <div class="form-group">
              <label for="caripasien" class="col-md-2">Cari Pasien Tertentu</label>
            </div>
            <div class="form-group">
              <div class="col-md-3">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="No. RM/Nama Pasien">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Cari</button>
                  </span>
                </div>
              </div>
            </div>
          </form>
          <hr>
          <!-- RIWAYAT PASIEN BAG. TABEL -->
          <table id="tabel-pas" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Waktu</th>
                <th>No. Registrasi</th>
                <th>No. Rekam Medis</th>
                <th>Nama Dokter</th>
                <th>Nama Hewan</th>                   
                <th>Diagnosis</th>                      
                <th>Aksi</th>           
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach($daftar_rm_aktif as $row){
                echo "<tr>";
                echo '<td>'.$row->waktu.'</td>';
                echo "<td>".$row->no_registrasi."</td>";     
                echo "<td>".$row->no_rm."</td>";
                echo "<td>".$row->username."</td>";
                echo "<td>".$row->nama_hewan."</td>";
                echo "<td>".$row->diagnosis."</td>";
                echo '<td>';

                  echo '<a href="#">Detail</a> | <a href="#">Cetak</a>';

                  echo'</td>';
                  echo"</tr>";$no++;
                }            
              ?>
            </tbody>
          </table>

          <script> 
            //datatable untuk tabel odp     
            $(document).ready(function(){
                $('#tabel-pas').DataTable({
                "pagingType": "numbers"
                });
                $('[data-toggle="tooltip"]').tooltip();
            }); 
          </script>
    </div>
  </body>
</html>