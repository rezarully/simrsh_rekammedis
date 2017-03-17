<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIM RSH Prof. Soeparwi | Detail Rawat Jalan</title>

    <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("style/css/dashboard.css"); ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.min.js"); ?>"></script>
  </head>

  <body>
  <div class="container">
   
    <!-- Main component for a primary marketing message or call to action -->
    <div class="panel panel-default">
    <div class="panel-heading"><b>Detail Rekam Medis - Rawat Jalan</b></div>
    <div class="panel-body">
   
       <p><a href="daftar_rm" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-repeat"></i> Kembali</a>  <a href="javascript:window.print()" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-print"></i> Cetak</a></p>         

        <?php 
          $id_detail_jalan = (int)$_GET['id']; 
          $query = $this->db->query("SELECT * FROM `inputrm` WHERE  id = $id_detail_jalan");
          $data = $query->row();
          $no_registrasi = $data->no_registrasi;
          $no_rm = $data->no_rm;
          $nama_pemilik = $data->nama_pemilik;
          $nama_hewan = $data->nama_hewan;
          $jenis_hewan = $data->jenis_hewan;
          $signalemen_ttl = $data->signalemen_ttl;
          $signalemen_kelamin = $data->signalemen_kelamin;
          $username = $data->username;
          $nama_tenagamedis = $data->nama_tenagamedis;
          $nama_mahasiswa = $data->nama_mahasiswa;
          $anamnesis = $data->anamnesis;
          $keadaan_umum = $data->keadaan_umum;
          $frek_nafas = $data->frek_nafas;
          $frek_pulsus = $data->frek_pulsus;
          $temperatur_tubuh = $data->temperatur_tubuh;
          $kulit_rambut = $data->kulit_rambut;
          $selaput_lendir = $data->selaput_lendir;
          $kelenjar_limfe = $data->kelenjar_limfe;
          $pernafasan = $data->pernafasan;
          $peredaran_darah = $data->peredaran_darah;
          $pencernaan = $data->pencernaan;
          $kelamin_perkencingan = $data->kelamin_perkencingan;
          $syaraf = $data->syaraf;
          $anggota_gerak = $data->anggota_gerak;
          $berat_badan = $data->berat_badan;
          $lain_anamnesis = $data->lain_anamnesis;
          $nama_pemeriksaan = $data->nama_pemeriksaan;
          $ket_lab = $data->ket_lab;
          $diagnosis = $data->diagnosis;
          $prognosis = $data->prognosis;
          $nama_obat = $data->nama_obat;
          $jumlah_resep = $data->jumlah_resep;
          $satuan_resep = $data->satuan_resep;
          $perintah_pembuatan = $data->perintah_pembuatan;
          $petunjuk_penggunaan = $data->petunjuk_penggunaan;
          $nama_tindakan = $data->nama_tindakan;
          $qty_tindakan = $data->qty_tindakan;
          $ket_tindakan = $data->ket_tindakan;
        ?>
                        
          <div class="col-md-12" style="text-align:center">
            <img src="/simrsh_rekammedis/style/img/logougm.jpg" alt="Logo UGM" style="width:95px;height:90px;text-align:left;">
            <h3>RUMAH SAKIT HEWAN PROF. SOEPARWI<br>FAKULTAS KEDOKTERAN HEWAN<br>UNIVERSITAS GADJAH MADA</h3>
            <p>Jl. Fauna No. 1 Karangmalang, Yogyakarta 55281 Telp: 0274-564707. 564708<br>Faks: 0274-564708 Website: http://rsh.ugm.ac.id/ email: rsh_prof.soeparwi@yahoo.co.id</p>
          </div>

          <div class="col-xs-12">
            <hr>
            <div class="col-xs-6">
              <div class="form-group">
                <label class="col-xs-6">Waktu</label>
                <label class="col-xs-6">: <?php echo (new DateTime('now',new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'); ?></label>
              </div>
              <div class="form-group">
                <label class="col-xs-6">No. Registrasi</label>
                <label class="col-xs-6">: <?php echo $no_registrasi ?></label>
              </div>
              <div class="form-group">
                <label class="col-xs-6">No. RM</label>
                <label class="col-xs-6">: <?php echo $no_rm ?></label>
              </div>
              <div class="form-group">
                <label class="col-xs-6">Nama Pemilik</label>
                <label class="col-xs-6">: <?php echo $nama_pemilik ?></label>
              </div>
              <div class="form-group">
                <label class="col-xs-6">Nama Hewan</label>
                <label class="col-xs-6">: <?php echo $nama_hewan ?></label>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="form-group">
                <label class="col-xs-6">Jenis Hewan</label>
                <label class="col-xs-6">: <?php echo $jenis_hewan ?></label>
              </div>
              <div class="form-group">
                <label class="col-xs-6">Signalemen</label>
                <label class="col-xs-6">: <?php echo $signalemen_ttl ?> / <?php echo $signalemen_kelamin ?></label>
              </div>
              <div class="form-group">
                <label class="col-xs-6">Dokter</label>
                <label class="col-xs-6">: <?php echo $username ?></label>
              </div>
              <div class="form-group">
                <label class="col-xs-6">Tenaga Medis</label>
                <label class="col-xs-6">: <?php echo $nama_tenagamedis ?></label>
              </div>
              <div class="form-group">
                <label class="col-xs-6">Mahasiswa</label>
                <label class="col-xs-6">: <?php echo $nama_mahasiswa ?></label>
              </div>
            </div>
          </div>
         
          <div class="col-md-12">
          <br>
            <table class="table">
              <tr>
                <td><b>ANAMNESIS DAN STATUS PRAESENS</td>
                <td></td>
              </tr>
              <tr>
                <td>Anamnesis</td>
                <td><?php echo $anamnesis?></td>
              </tr>
              <tr>
                <td>Keadaan Umum</td>
                <td><?php echo $keadaan_umum?></td>
              </tr>
              <tr>
                <td>Frekuensi Nafas</td>
                <td><?php echo $frek_nafas?></td>
              </tr>
              <tr>
                <td>Frekuensi Pulsus</td>
                <td><?php echo $frek_pulsus?></td>
              </tr>
              <tr>
                <td>Temperatur Tubuh</td>
                <td><?php echo $temperatur_tubuh?></td>
              </tr>
              <tr>
                <td>Kulit dan Rambut</td>
                <td><?php echo $kulit_rambut?></td>
              </tr>
              <tr>
                <td>Selaput Lendir</td>
                <td><?php echo $selaput_lendir?></td>
              </tr>
              <tr>
                <td>Kelenjar-kelenjar Limfe</td>
                <td><?php echo $kelenjar_limfe?></td>
              </tr>
              <tr>
                <td>Pernafasan</td>
                <td><?php echo $pernafasan?></td>
              </tr>
              <tr>
                <td>Peredaran Darah</td>
                <td><?php echo $peredaran_darah?></td>
              </tr>
              <tr>
                <td>Pencernaan</td>
                <td><?php echo $pencernaan?></td>
              </tr>
              <tr>
                <td>Kelamin dan Perkencingan</td>
                <td><?php echo $kelamin_perkencingan?></td>
              </tr>
              <tr>
                <td>Syaraf</td>
                <td><?php echo $syaraf?></td>
              </tr>
              <tr>
                <td>Anggota Gerak</td>
                <td><?php echo $anggota_gerak?></td>
              </tr>
              <tr>
                <td>Berat Badan</td>
                <td><?php echo $berat_badan?></td>
              </tr>
              <tr>
                <td>Lain-lain</td>
                <td><?php echo $lain_anamnesis?></td>
              </tr>
              <tr>
                <td><b>PEMERIKSAAN LABORATORIUM</td>
                <td></td>
              </tr>
              <tr>
                <td>Pemeriksaan Laboratorium</td>
                <td><?php echo $nama_pemeriksaan?></td>
              </tr>
              <tr>
                <td>Keterangan Laboratorium</td>
                <td><?php echo $ket_lab?></td>
              </tr>
              <tr>
                <td><b>DIAGNOSIS DAN PROGNOSIS</td>
                <td></td>
              </tr>
              <tr>
                <td>Diagnosis</td>
                <td><?php echo $diagnosis?></td>
              </tr>
              <tr>
                <td>Prognosis</td>
                <td><?php echo $prognosis?></td>
              </tr>
              <tr>
                <td><b>TATA LAKSANA</td>
                <td></td>
              </tr>
              <tr>
                <td>R/</td>
                <td><?php echo $nama_obat?></td>
              </tr>
              <tr>
                <td>Jumlah R/</td>
                <td><?php echo $jumlah_resep?></td>
              </tr>
              <tr>
                <td>Satuan R/</td>
                <td><?php echo $satuan_resep?></td>
              </tr>
              <tr>
                <td>Perintah Pembuatan</td>
                <td><?php echo $perintah_pembuatan?></td>
              </tr>
              <tr>
                <td>Petunjuk Penggunaan</td>
                <td><?php echo $petunjuk_penggunaan?></td>
              </tr>
              <tr>
                <td>Tindakan</td>
                <td><?php echo $nama_tindakan?></td>
              </tr>
              <tr>
                <td>Qty Tindakan</td>
                <td><?php echo $qty_tindakan?></td>
              </tr>
              <tr>
                <td>Keterangan Tindakan</td>
                <td><?php echo $ket_tindakan?></td>
              </tr>
            </table>
          </div>
    
    </div>    <!-- /panel -->
    </div>
  </div> <!-- /container -->
  </body>
</html>
