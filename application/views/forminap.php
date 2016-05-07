<!-- POPUP FORM INAP -->

<div class="modal-dialog">
  <div class="modal-content">
    
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Form Inap</h4>
    </div>

    <div class="modal-body">
      <!-- BAG. ATAS -->
      <form action="<?php echo base_url("index.php/rekammedis/save_data_daftar_inap");?>" method="POST">
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-md-5">Waktu</label>
                <div class="col-md-6">
                  <input type="date" name="waktu" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-5">No. Registrasi</label>
                <div class="col-md-6">
                  <input type="text" name="no_registrasi" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-5">No. Rekam Medis</label>
                <div class="col-md-6">
                  <input type="text" name"no_rm" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-5">Nama Pemilik</label>
                <div class="col-md-6">
                  <input type="text" name="nama_pemilik" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-md-5">Nama Hewan</label>
                <div class="col-md-6">
                  <input type="text" name="nama_hewan" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-5">Diagnosa</label>
                <div class="col-md-6">
                  <input type="text" name="diagnosa" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-5">Signalemen</label>
                <div class="col-md-3">
                  <input type="number" name="signalemen_ttl" class="form-control">
                </div>              
                <div class="col-md-3">
                  <input type="text" name="signalemen_kelamin" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-5">Berat Badan</label>
                <div class="col-md-3">
                  <input type="number" name="berat_badan" class="form-control">
                </div>
                <h5>Gram</h5>
              </div>
            </div>                             
          </div>
          <div class="col-md-4">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-md-5">Nama Dokter</label>
                <div class="col-md-6">
                  <input type="text" name="username" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-5">Nama Mahasiswa</label>
                <div class="col-md-6">
                  <input type="text" name="nama_mahasiswa" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-5">Semester</label>
                <div class="col-md-3">
                  <input type="number" name="semester_mahasiswa" class="form-control">
                </div>
              </div>
            </div>             
          </div>
        </div>
        <!-- BAG BAWAH -->
        <div class="col-md-12">
        <hr>
          <div class="col-md-6">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-md-4">Rencana Pengobatan</label>
                <div class="col-md-8">
                  <textarea type="text" name="rencana_pengobatan" class="form-control" rows="4"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4">Pengobatan</label>
                <div class="col-md-8">
                  <textarea type="text" name="pengobatan" class="form-control" rows="4"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4">Keterangan</label>
                <div class="col-md-8">
                  <textarea type="text" name="ket_pengobatan" class="form-control" rows="4"></textarea>
                </div>
              </div>
              <button type="button" name="tambah_inap" class="btn btn-primary" style="float:right">Tambah</button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="table-responsive">
              <table class="table table-bordered" style="width:100%">
                <thead>
                  <tr>
                      <th>Waktu</th>
                      <th>Pengobatan</th>
                      <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    </div>
  
  </div>
</div>