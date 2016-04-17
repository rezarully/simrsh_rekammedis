              <div id="datapasien" class="tab-pane fade in active">
                <br>
                <br>
                  <div class="col-md-6">
                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/tindakan/gettindakan">
                      <div class="form-group">
                        <label for="noregistrasi" class="col-md-4">No. Registrasi</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" name="noregistrasi" id="noregistrasi">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="norm" class="col-md-4">No. Rekam Medis</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" name="norm" id="norm">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namapemilik" class="col-md-4">Nama Pemilik</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" name="namapemilik" id="namapemilik">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namahewan" class="col-md-4">Nama Hewan</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" name="namahewan" id="namahewan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="jenishewan" class="col-md-4">Jenis Hewan</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" name="jenishewan" id="jenishewan">
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-6">
                    <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/tindakan/gettindakan">
                      <div class="form-group">
                        <label for="signalemen" class="col-md-4">Signalemen</label>
                        <div class="col-md-3">
                          <input type="text" class="form-control" name="signalementtl" id="signalementtl">
                        </div>
                        <div class="col-md-2">
                          <input type="text" class="form-control" name="siganlemenkelamin" id="siganelemenkelamin">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namadokter" class="col-md-4">Nama Dokter</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" name="namadokter" id="namadokter">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namatenagamedis" class="col-md-4">Nama Tenaga Medis</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" name="namatenagamedis" id="namatenagamedis">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="mahasiswakoas" class="col-md-4">Mahasiswa Koas</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" name="mahasiswakoas" id="mahasiswakoas">
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- RIWAYAT PASIEN -->
                  <div class="col-md-12">
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
                  </div>
              </div>