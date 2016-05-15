              <div id="rencanapengobatan" class="tab-pane fade in active">
                <br>
                <br>
                  <div class="col-md-7">
                    <div class="tbodyClone5">
                      <div class="clonedInput5 form-horizontal">
                        <div class="form-group">
                          <div class="col-md-12">
                            <table class="table">
                              <thead>
                                  <tr>
                                      <td>R/</td>
                                      <td>Jumlah</td>
                                      <td>Satuan</td>
                                  </tr>
                              </thead>
                              <tbody class="tbodyClone5a">
                                  <tr id="clonedInput5a" class="clonedInput5a">
                                      <td><?php echo form_dropdown('nama_obat', $data, '', 'class="form-control chosen-select"');?></td>
                                      <td><input name="jumlah_resep" class="form-control" value="" /></td>
                                      <td><input name="satuan_resep" class="form-control" value="" /></td>
                                      <td><button id="buttonresep" name="buttonresep" type="button" class="clone btn btn-primary"><i class="fa fa-plus-circle">+</i></button></td>
                                      <td><button id="buttonbatalresep" name="buttonbatalresep" type="button" class="remove btn btn-primary"><i class="fa fa-circles"></i>-</button></td>
                                  </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="perintahpembuatan" class="perpem col-md-4">Perintah Pembuatan</label>
                          <div class="col-md-8">
                            <textarea class="form-control" name="perintah_pembuatan" rows="4"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="petunjukpenggunaan" class="petpeng col-md-4">Petunjuk Penggunaan</label>
                          <div class="col-md-8">
                            <textarea class="form-control" name="petunjuk_penggunaan" rows="4"></textarea>
                          </div>
                        </div>
                        <button type="button" class="buttonobat btn btn-primary">Tambah Obat</button>
                        <button type="reset" class="buttonobatbatal btn btn-primary">Batalkan</button>
                        <br>
                        <br>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <!--Kesimpulan--> 
                    <table class="table table-striped table-condensed">
                      <thead>
                        <tr>
                          <td class="numeric span3">1</td>
                          <td id="pengobatan_1">x</td>
                        </tr>
                        <tr>
                          <td class="numeric span3">2</td>
                          <td id="pengobatan_2">x</td>
                        </tr>
                        <tr>
                          <td class="numeric span3">3</td>
                          <td id="pengobatan_3">x</td>
                        </tr>
                        <tr>
                          <td class="numeric span3">4</td>
                          <td id="pengobatan_4">x</td>
                        </tr>
                        <tr>
                          <td class="numeric span3">5</td>
                          <td id="pengobatan_5">x</td>
                        </tr>
                        <tr>
                          <td class="numeric span3">6</td>
                          <td id="pengobatan_6">x</td>
                        </tr>
                        <tr>
                          <td class="numeric span3">7</td>
                          <td id="pengobatan_7">x</td>
                        </tr>
                        <tr>
                          <td class="numeric span3">8</td>
                          <td id="pengobatan_8">x</td>
                        </tr>
                        <tr>
                          <td class="numeric span3">9</td>
                          <td id="pengobatan_9">x</td>
                        </tr>
                        <tr>
                          <td class="numeric span3">10</td>
                          <td id="pengobatan_10">x</td>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        echo'<tr>';
                        echo'</tr>';
                        echo'<tr>';
                        echo'</tr>';
                        echo'<tr>';
                        echo'</tr>';
                        echo'<tr>';
                        echo'</tr>';
                        echo'<tr>';
                        echo'</tr>';
                        echo'<tr>';
                        echo'</tr>';
                        echo'<tr>';
                        echo'</tr>';
                        echo'<tr>';
                        echo'</tr>';
                        echo'<tr>';
                        echo'</tr>';
                        echo'<tr>';
                        echo'</tr>';
                        ?>
                      </tbody>
                    </table>
                  </div>
              </div>

              