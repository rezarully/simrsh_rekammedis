<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar Inap</title>

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
    <!-- RIWAYAT PASIEN BAG. TABEL -->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h4 style="text-align:left">Daftar Inap</h4>
      <hr>
        <table id="tabel-pas" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Waktu</th>
              <th>No. Registrasi</th>
              <th>No. Rekam Medis</th>
              <th>Nama Dokter</th>
              <th>Nama Pemilik</th>                   
              <th>Nama Hewan</th>                      
              <th>Aksi</th>           
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              foreach($daftar_inap_aktif as $row){
              echo "<tr>";
              echo '<td>'.$waktu.'</td>';
              echo "<td>".$row->no_registrasi."</td>";     
              echo "<td>".$row->no_rm."</td>";
              echo "<td>".$row->username."</td>";
              echo "<td>".$row->nama_pemilik."</td>";
              echo "<td>".$row->nama_hewan."</td>";
              echo '<td>'; if ( $row->status == 0) {

                echo '<a data-target="#forminap" data-toggle="modal">Tambah</a> | <a href="#">Selesai</a>';
              }
                else {
                  echo 'Closed';
                } echo'</td>';
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
        
        <!--Formulir Inap -->
        <div class="modal modal-wide fade" id="forminap">
          <?php $this->load->view('forminap'); ?>
        </div>
        <style>
          .modal.modal-wide .modal-dialog 
            {
              width: 90%;
            }
          .modal-wide .modal-body 
            {
              overflow-y: auto;
            }
          .modal-title
            {
              text-align: center;
            }
        </style>

        <script>
          $(".modal-wide").on("show.bs.modal", function() {
          var height = $(window).height() - 200;
          $(this).find(".modal-body").css("max-height", height);
          });
        </script>

    </div>
  </body>
</html>