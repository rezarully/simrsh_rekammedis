              <div id="obatobatan" class="tab-pane fade">
                <br>
                  <div class="tbodyClone3 col-md-12">
                    <div class="clonedInput3 form-horizontal">
                      <div class="form-group">
                        <div class="col-md-7">
                          <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>R/</td>
                                    <td>Jumlah</td>
                                    <td>Satuan</td>
                                </tr>
                            </thead>
                            <tbody class="tbodyClone3a">
                                <tr id="clonedInput3a" class="clonedInput3a">
                                    <td><?php echo form_dropdown('nama_obat', $data, '', 'class="form-control chosen-select"');?></td>
                                    <td><input name="jumlah_resep" class="form-control" value="" /></td>
                                    <td><input name="satuan_resep" class="form-control" value="" /></td>
                                    <td><button name="buttonresep" type="button" class="clone btn btn-primary"><i class="fa fa-plus-circle">+</i></button></td>
                                    <td><button name="buttonbatalresep" type="button" class="remove btn btn-primary"><i class="fa fa-circles"></i>-</button></td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="perintahpembuatan" class="perpem col-md-2">Perintah Pembuatan</label>
                        <div class="col-md-5">
                          <textarea class="form-control" name="perintah_pembuatan" rows="4"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="petunjukpenggunaan" class="petpeng col-md-2">Petunjuk Penggunaan</label>
                        <div class="col-md-5">
                          <textarea class="form-control" name="petunjuk_penggunaan" rows="4"></textarea>
                        </div>
                      </div>
                      <button type="button" class="buttonobat btn btn-primary">Tambah Obat</button>
                      <button type="reset" class="buttonobatbatal btn btn-primary">Batalkan</button>
                      <br>
                      <br>
                    </div>
                  </div>
                  <!-- TOMBOL
                  <div class="col-md-12">
                  <hr>
                    <nav>
                      <ul class="pager">
                        <li class="pull-right"><a href="#" id="selanjutnya5">Selanjutnya <span aria-hidden="true">&rarr;</span></a></li>
                        <li class="pull-right"><a href="#" id="batal5">Batal</a></li>
                      </ul>
                    </nav>
                  </div> -->
              </div>

              