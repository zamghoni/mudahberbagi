<div class="row">
  <div class="col-sm-12">
    <div class="widget-box">
      <div class="widget-header">
        <h4 class="widget-title"><?php echo $sub; ?></h4>
        <hr>
      </div>
      <div class="widget-body">
        <div class="widget-main no-padding">
          <!--Form-->
          <form method="post" action="<?php echo site_url('donatur/save') ?>" enctype="multipart/form-data">
            <fieldset>

              <label>Kode Donatur</label><br>
              <input type="text" name="kode_donatur" class="form-control" placeholder="Masukan Kode Donatur" value="" required oninvalid="this.setCustomValidity('Kode Donatur Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Nama Donatur</label><br>
              <input type="text" name="nama_donatur" class="form-control" placeholder="Masukan Nama Donatur" value="" required oninvalid="this.setCustomValidity('Nama Donatur Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Password Donatur</label><br>
              <input type="password" name="pswd_donatur" class="form-control" placeholder="Masukan Password Donatur" value="" required oninvalid="this.setCustomValidity('Password Donatur Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>No HP Donatur</label><br>
              <input type="number" name="hp_donatur" class="form-control" placeholder="Masukan No HP Donatur" value="" required oninvalid="this.setCustomValidity('No HP Donatur Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Email Donatur</label><br>
              <input type="email" name="email_donatur" class="form-control" placeholder="Masukan Email Donatur" value="" required oninvalid="this.setCustomValidity('Email Donatur Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Foto Donatur</label><br>
              <input type="file" name="img_donatur" class="form-control" required><p></p>

              <div class="form-actions text-center">
                <a href="<?php echo site_url('donatur') ?>"><button class="btn btn-danger" type="button"><i class="ace-icon fa fa-undo bigger-110"></i> Batal</button></a>
                <button class="btn btn-primary" type="submit"><i class="ace-icon fa fa-check bigger-110"></i> Simpan</button>
              </div>
            </fieldset>
          </form>
          <!--EndForm-->
        </div>
      </div>
    </div>
  </div>
</div>
