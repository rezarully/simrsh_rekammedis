              <div id="obatobatan" class="tab-pane fade">
                <br>
                <br>
                  <div class="tbodyClone3 col-md-12">
                    <div class="clonedInput3 form-horizontal">
                      <div class="form-group">
                        <label for="obat" class="col-md-2">Obat</label>
                        <div class="col-md-5">
                          <?php echo form_dropdown('nama_obat', $data, '', 'multiple class="form-control chosen-select"');?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bentuk sediaan" class="bensed col-md-2">Bentuk Sediaan</label>
                        <div class="col-md-5">
                          <textarea class="form-control" name="bentuk_sediaan" rows="4"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="jumlah" class="jum col-md-2">Jumlah</label>
                        <div class="col-md-2">
                          <input type="text" class="form-control" name="jumlah_obat">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="dosisobat" class="dosobat col-md-2">Dosis</label>
                        <div class="col-md-2">
                          <input type="text" class="form-control" name="dosis_obat">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="petunjukobat" class="petobat col-md-2">Petunjuk</label>
                        <div class="col-md-5">
                          <textarea class="form-control" name="petunjuk_obat" rows="4"></textarea>
                        </div>
                      </div>
                        <button type="submit" class="buttonobat btn btn-primary">Tambah Obat</button>
                        <button type="submit" class="buttonobatbatal btn btn-primary">Batalkan</button>
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

              