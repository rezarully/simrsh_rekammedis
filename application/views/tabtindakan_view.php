              <div id="tindakan" class="tab-pane fade">
                <br>
                <br>
                  <div class="tbodyClone4 col-md-12">
                    <div class="clonedInput4 form-horizontal">
                      <div class="form-group">
                        <label for="tindakan" class="col-md-2">Tindakan</label>
                        <div class="col-md-5">
                          <?php echo form_dropdown('nama_tindakan[]', $data, '', 'class="form-control chosen-select"');?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="qty" class="col-md-2">Qty</label>
                        <div class="col-md-2">
                          <input type="text" class="form-control" name="qty_tindakan[]">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="keterangan" class="col-md-2">Keterangan</label>
                        <div class="col-md-5">
                          <textarea class="form-control" name="ket_tindakan[]" rows="4"></textarea>
                        </div>
                      </div>
                      <button type="button" class="buttontindakan btn btn-primary">Tambah Tindakan</button>
                      <button type="button" class="buttontindakanbatal btn btn-primary">Batalkan</button>
                        <br>
                        <br>
                    </div>
                  </div>
                  <!-- TOMBOL -->
                  <div class="col-md-12">
                  <hr>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox_inap"> Tambahkan ke daftar inap
                      </label>
                    </div>
                    <div class="form-actions pull-right">
                      <button class="btn btn-primary" type="submit" name="submit" value="submit">Simpan</button>
                      <a class="btn btn-default" type="reset" href="index">Batal</a>
                    </div>
                  </div>
              </div>
