              <div id="lab" class="tab-pane fade">
                <br>
                <br>
                  <div class="tbodyClone1 col-md-12">
                    <div class="clonedInput1 form-horizontal">
                      <div class="form-group">
                        <label class="control-label col-sm-1">Pemeriksaan Laboratorium</label>
                        <div class="col-sm-6">
                          <?php echo form_dropdown('nama_pemeriksaan', $data, '', 'class="form-control"');?>
                        </div>
                      </div>                      
                      <!-- HIDDEN FESES -->
                      <!-- <div id="konsis" class="form-group">       
                        <label for="konsislabel" class="col-md-2">Konsistensi</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" id="konsisinput">
                        </div>
                      </div>
                      <div id="natif" class="form-group">       
                        <label for="natiflabel" class="col-md-2">Natif</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" id="natifinput">
                        </div>
                      </div>
                      <div id="centri" class="form-group">       
                        <label for="centrilabel" class="col-md-2">Centrifuge</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" id="centriinput">
                        </div>
                      </div>
                      <!-- HIDDEN URIN -->
                      <!--<div id="reaksi" class="form-group">       
                        <label for="reaksilabel" class="col-md-2">Reaksi</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" id="reaksiinput">
                        </div>
                      </div>
                      <div id="protein" class="form-group">       
                        <label for="proteinlabel" class="col-md-2">Protein</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" id="proteininput">
                        </div>
                      </div>
                      <div id="sedimen" class="form-group">       
                        <label for="sedimenlabel" class="col-md-2">Sedimen</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" id="sedimeninput">
                        </div>
                      </div>
                      <!-- HIDDEN HEMATOLOGI -->
                      <!--<div id="sifat" class="form-group">       
                        <label for="sifatlabel" class="col-md-2">Sifat</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" id="sifatinput">
                        </div>
                      </div>
                      <div id="kadar" class="form-group">       
                        <label for="kadarlabel" class="col-md-2">Kadar Hb</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" id="kadarinput">
                        </div>
                      </div>
                      <div id="prep" class="form-group">       
                        <label for="preplabel" class="col-md-2">Prep. Apus</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" id="prepinput">
                        </div>
                      </div> -->
                      <div class="form-group">
                        <label for="keteranganlab" class="col-md-2">Keterangan</label>
                        <div class="col-md-5">
                          <textarea class="form-control" name="ket_lab" rows="4"></textarea>
                        </div>
                      </div>
                      <br>
                        <button type="submit" class="buttonlab btn btn-primary">Tambah Pemeriksaan Laboratorium</button>
                        <button type="submit" class="buttonlabbatal btn btn-primary">Batalkan</button>
                        <br>
                        <br>
                    </div>
                  </div>
              </div>

              
