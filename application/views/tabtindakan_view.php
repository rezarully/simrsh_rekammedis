              <div id="tindakan" class="tab-pane fade">
                <br>
                <br>
                  <div class="tbodyClone4 col-md-12">
                    <div class="clonedInput4 form-horizontal">
                      <div class="form-group">
                        <label for="tind" class="col-md-2">Tindakan</label>
                        <div class="col-md-2">
                          <select name="tind" id="tind" class="form-control" required>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                          </select> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="qty" class="col-md-2">Qty</label>
                        <div class="col-md-2">
                          <input type="text" class="form-control" id="dosisobat">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="keterangan" class="col-md-2">Keterangan</label>
                        <div class="col-md-5">
                          <textarea class="form-control" rows="4"></textarea>
                        </div>
                      </div>
                      <button type="submit" class="buttontindakan btn btn-primary">Tambah Tindakan</button>
                      <button type="submit" class="buttontindakanbatal btn btn-primary">Batalkan</button>
                        <br>
                        <br>
                    </div>
                  </div>
                  <!-- TOMBOL -->
                  <div class="col-md-12">
                  <hr>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" onclick='window.location.assign("application/views/antrianinap_view")'> Tambahkan ke daftar rawat inap
                      </label>
                    </div>
                    <div class="form-actions pull-right">
                      <button class="btn btn-primary" type="submit" name="submit" value="submit">Simpan</button>
                      <button class="btn btn-default" type="button">Batal</button>
                    </div>
                  </div>
              </div>

  </form>     