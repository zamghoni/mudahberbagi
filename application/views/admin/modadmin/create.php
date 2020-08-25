<div class="row">
<div class="col-sm-12">
<div class="widget-box">
<div class="widget-header">
<h4 class="widget-title"><?php echo $sub; ?></h4>
</div>
<hr>
<div class="widget-body">
<div class="widget-main no-padding">
<!--Form-->
  <form method="post" action="<?php echo site_url('admin/save') ?>">
  <fieldset>

<label>Kode Admin</label><br>
<input type="text" name="kd_admin" class="form-control" placeholder="Masukan Kode admin" value="" required oninvalid="this.setCustomValidity('Kode admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

<label>Nama Lengkap</label><br>
<input type="text" name="nama_admin" class="form-control" placeholder="Masukan Nama Lengkap admin" value="" required oninvalid="this.setCustomValidity('Nama admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

<label>HP</label><br>
<input type="text" name="hp_admin" class="form-control" placeholder="Masukan Nomor HP admin" value="" required oninvalid="this.setCustomValidity('Nomor HP admin Harus Di Isi')" oninput="setCustomValidity('')" onKeyPress="return isNumberKey(event)"><p></p>

<label>Email</label><br>
<input type="email" name="email_admin" class="form-control" placeholder="Masukan Email admin" value="" required oninvalid="this.setCustomValidity('Email admin Harus Di Isi atau Bentuk Format Email')" oninput="setCustomValidity('')"><p></p>

<label>Password</label><br>
<input type="password" name="pswd_admin" class="form-control" placeholder="Masukan Kata Sandi" value="" required oninvalid="this.setCustomValidity('Password admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

<label>Foto Admin</label><br>
<input type="file" class="form-control" name="img_admin" required><p></p>

<div class="form-actions text-center">
<a href="<?php echo site_url('admin') ?>"><button class="btn btn-danger" type="button"><i class="ace-icon fa fa-undo bigger-110"></i> Batal</button></a>
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
