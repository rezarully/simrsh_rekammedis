<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIM RSH Prof. Soeparwi | Form Inap</title>

    <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/dashboard.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap-chosen.css"); ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://harvesthq.github.io/chosen/chosen.jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/chosen.jquery.js"); ?>"></script>
  </head>

  <body>

  <?php $this->load->view('menu_view'); ?>
    <div class="container-fluid">
      <div class="row">
        
        <!-- DATA PASIEN -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h4 style="text-align:left">Form Inap</h4>
            <hr>
            <form action="<?php echo base_url("index.php/rekammedis/save_data_daftar_inap");?>" method="POST">
              <div class="col-md-6">
                <div class="form-horizontal">
                  <?php 
                        $id_forminap = (int)$_GET['id']; 
                        $query = $this->db->query("SELECT * FROM `inputrminap` WHERE  id = $id_forminap");
                        $data = $query->row();
                        $no_registrasi = $data->no_registrasi;
                        $no_rm = $data->no_rm;
                        $nama_pemilik = $data->nama_pemilik;
                        $nama_hewan = $data->nama_hewan;
                        $diagnosis = $data->diagnosis;
                        $signalemen_ttl = $data->signalemen_ttl;
                        $signalemen_kelamin = $data->signalemen_kelamin;
                        $berat_badan = $data->berat_badan;
                      ?>
                  <div class="form-group">
                    <label class="col-md-4">Waktu</label>
                    <div class="col-md-5">
                      <input type="timestamp" name="waktu" class="form-control" value="<?php echo (new DateTime('now',new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'); ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4">No. Registrasi</label>
                    <div class="col-md-5">
                      <input type="text" name="no_registrasi" class="form-control" value="<?php echo $no_registrasi ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4">No. Rekam Medis</label>
                    <div class="col-md-5">
                      <input type="text" name="no_rm" class="form-control" value="<?php echo $no_rm ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4">Nama Pemilik</label>
                    <div class="col-md-5">
                      <input type="text" name="nama_pemilik" class="form-control" value="<?php echo $nama_pemilik ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4">Nama Hewan</label>
                    <div class="col-md-5">
                      <input type="text" name="nama_hewan" class="form-control" value="<?php echo $nama_hewan ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4">Diagnosis</label>
                    <div class="col-md-5">
                      <input type="text" name="diagnosis" class="form-control" value="<?php echo $diagnosis ?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-horizontal">
                  <div class="form-group">
                    <label class="col-md-4">Signalemen</label>
                    <div class="col-md-3">
                      <input type="number" name="signalemen_ttl" class="form-control" value="<?php echo $signalemen_ttl?>" readonly>
                    </div>              
                    <div class="col-md-2">
                      <input type="text" name="signalemen_kelamin" class="form-control" value="<?php echo $signalemen_kelamin ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4">Berat Badan</label>
                    <div class="col-md-3">
                      <input type="number" name="berat_badan" class="form-control" value="<?php echo $berat_badan ?>" readonly>
                    </div>
                    <h5>Gram</h5>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4">Nama Dokter</label>
                    <div class="col-md-5">
                      <input type="text" name="username" class="form-control" value="<?php $username = $this->session->userdata('username'); echo $username;?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4">Nama Mahasiswa</label>
                    <div class="col-md-5">
                      <input type="text" name="nama_mahasiswa" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4">Semester</label>
                    <div class="col-md-5">
                      <input type="number" name="semester_mahasiswa" class="form-control">
                    </div>
                  </div>
                </div>             
              </div>
        </div>
        <!-- TAB -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="form-horizontal">
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a data-toggle="tab" href="#rencanapengobatan">Rencana Pengobatan</a></li>
              <li role="presentation"><a data-toggle="tab" href="#pengobatan">Pengobatan</a></li>
            </ul>
            <div class="tab-content">
              <!-- TAB BAG. DATA PASIEN -->
              <?php $data->data = $this->rekammedis_model->get_data_dropdownobat(); $this->load->view('tabrencanapengobatan_view', $data); ?>
              <!-- TAB BAG. ANAMNESIS -->
              <?php $this->load->view('tabpengobatan_view'); ?>
            </div>
          </form>
          <!-- JS UNTUK TAB --> 
          <script>
            $(document).ready(function(){
              $(".nav-tabs a").click(function(){
                  $(this).tab('show');
              });
            });
          </script>
          <!-- JS CLONE FORM BAG. RESEP -->
          <script>
          var regex = /^(.*)(\d)+$/i;
          var cloneIndex = $(".clonedInput5a").length;
          if ($(".clonedInput5a").length == 1) {
              $('.remove').hide();
          } else {
              $('.remove').show();
          }

          function clone() {
              $(this).parents(".clonedInput5a").clone()
                  .appendTo(".tbodyClone5a")
                  .attr("id", "clonedInput5a" + cloneIndex)
                  .find("input")
                  .val("")
                  .each(function () {
                      var id = this.id || "";
                      var match = id.match(regex) || [];
                      if (match.length == 3) {
                          this.id = match[1] + (cloneIndex);
                      }
                  })
                  .on('click', 'clone', clone)
                  .on('click', 'remove', remove);

              cloneIndex++;

              //se tem só uma linha esconde o delete
              console.log("Total de linhas => " + $(".clonedInput5a").length);
            
              if ($(".clonedInput5a").length == 1) {
                  $('.remove').hide();
              } else {
                  $('.remove').show();
              }

          }
          function remove() {        
              $(this).parents(".clonedInput5a").remove();

              if ($(".clonedInput5a").length == 1) {
                  $('.remove').hide();
              } else {
                  $('.remove').show();
              }

          }    
          $(document).on("click", ".clone", clone);
          $(document).on("click", ".remove", remove);
          </script>            

          <!-- JS CLONE FORM BAG. OBAT -->
          <script>
          var regex = /^(.*)(\d)+$/i;
          var cloneIndex = $(".clonedInput5").length;
          if ($(".clonedInput5").length == 1) {
              $('.buttonobatbatal').hide();
          } else {
              $('.buttonobatbatal').show();
          }

          function clone() {
              $(this).parents(".clonedInput5").clone()
                  .appendTo(".tbodyClone5")
                  .attr("id", "clonedInput5" + cloneIndex)
                  .find("select, input, textarea")
                  .val("")
                  .each(function () {
                      var id = this.id || "";
                      var match = id.match(regex) || [];
                      if (match.length == 3) {
                          this.id = match[1] + (cloneIndex);
                      }
                  })
                  .on('click', 'buttonobat', clone)
                  .on('click', 'buttonobatbatal', remove);

              cloneIndex++;

              //se tem só uma linha esconde o delete
              console.log("Total de linhas => " + $(".clonedInput5").length);
            
              if ($(".clonedInput5").length == 1) {
                  $('.buttonobatbatal').hide();
              } else {
                  $('.buttonobatbatal').show();
              }

          }
          function remove() {        
              $(this).parents(".clonedInput5").remove();

              if ($(".clonedInput5").length == 1) {
                  $('.buttonobatbatal').hide();
              } else {
                  $('.buttonobatbatal').show();
              }

          }    
          $(document).on("click", ".buttonobat", clone);
          $(document).on("click", ".buttonobatbatal", remove);
          </script>
        </div>
      
      </div>
    </div>
  </body>
</html>