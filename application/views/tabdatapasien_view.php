              <div id="datapasien" class="tab-pane fade in active">
                <br>
                <br>
                  <?php 
                    $id_tabdatapasien = (int)$_GET['id']; 
                    $query = $this->db->query("SELECT * FROM `data_pasien` WHERE  id = $id_tabdatapasien");
                    $data = $query->row();
                    $no_registrasi = $data->no_registrasi;
                    $no_rm = $data->no_rm;
                    $nama_pemilik = $data->nama_pemilik;
                    $nama_hewan = $data->nama_hewan;
                    $jenis_hewan = $data->jenis_hewan;
                    $signalemen_ttl = $data->signalemen_ttl;
                    $signalemen_kelamin = $data->signalemen_kelamin;
                  ?>
                  <div class="col-md-6">
                    <div class="form-horizontal">
                      <div class="form-group">
                          <label for="jenishewan" class="col-md-4">Waktu</label>
                          <div class="col-md-7">
                            <input type="timestamp" class="form-control" name="waktu" value="<?php echo (new DateTime('now',new DateTimeZone('Asia/Jakarta')))->format('Y-m-d H:i:s'); ?>" readonly>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="noregistrasi" class="col-md-4">No. Registrasi</label>
                        <div class="col-md-7">
                          <input type="text" class="form-control" name="no_registrasi" value="<?php echo $no_registrasi ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="norm" class="col-md-4">No. Rekam Medis</label>
                        <div class="col-md-7">
                          <input type="text" class="form-control" name="no_rm" value="<?php echo $no_rm?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namapemilik" class="col-md-4">Nama Pemilik</label>
                        <div class="col-md-7">
                          <input type="text" class="form-control" name="nama_pemilik" value="<?php echo $nama_pemilik?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namahewan" class="col-md-4">Nama Hewan</label>
                        <div class="col-md-7">
                          <input type="text" class="form-control" name="nama_hewan" value="<?php echo $nama_hewan?>" readonly>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-horizontal">
                      <div class="form-group">
                        <label for="jenishewan" class="col-md-4">Jenis Hewan</label>
                        <div class="col-md-7">
                          <input type="text" class="form-control" name="jenis_hewan" value="<?php echo $jenis_hewan?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="signalemen" class="col-md-4">Signalemen</label>
                        <div class="col-md-4">
                          <input type="date" class="form-control" name="signalemen_ttl" value="<?php echo $signalemen_ttl?>" readonly>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="signalemen_kelamin" value="<?php echo $signalemen_kelamin;?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namadokter" class="col-md-4">Nama Dokter</label>
                        <div class="col-md-7">
                          <input type="text" class="form-control" name="username" value="<?php $usern = $this->session->userdata('username'); echo $usern;?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namatenagamedis" class="col-md-4">Nama Tenaga Medis</label>
                        <div class="col-md-7">
                          <input type="text" class="form-control" name="nama_tenagamedis">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="mahasiswakoas" class="col-md-4">Nama Mahasiswa</label>
                        <div class="col-md-7">
                          <input type="text" class="form-control" name="nama_mahasiswa">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- RIWAYAT PASIEN -->
                  <!-- <div class="col-md-12">
                  <hr>
                  <br>
                    <div class="table-responsive">
                      <table class="table table-bordered" style="width:100%">
                        <thead>
                          <tr>
                              <th>Waktu</th>
                              <th>Dokter</th>
                              <th>Diagnosis</th>
                              <th>Tindakan</th>
                              <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
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
                            <td><a href="#">Detail</a> | <a href="#">Cetak</a></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="#">Detail</a> | <a href="#">Cetak</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div> -->
              </div>