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
<form method="post" action="<?php echo site_url('admin/update/'.$data['kd_admin']) ?>" enctype="multipart/form-data">
  <fieldset>

<label>Kode Admin</label><br>
<input type="text" disabled name="kd_admin" class="form-control" placeholder="Masukan Nama admin" value="<?php echo $data['kd_admin'] ?>" required oninvalid="this.setCustomValidity('Kode admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

<label>Nama</label><br>
<input type="text" name="nama_admin" class="form-control" placeholder="Masukan Nama admin" value="<?php echo $data['nama_admin'] ?>" required oninvalid="this.setCustomValidity('Nama admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

<label>HP</label><br>
<input type="text" name="hp_admin" class="form-control" placeholder="Masukan HP admin" value="<?php echo $data['hp_admin'] ?>" required oninvalid="this.setCustomValidity('HP admin Harus Di Isi')" oninput="setCustomValidity('')" onKeyPress="return isNumberKey(event)"><p></p>

<label>Email</label><br>
<input type="text" name="email_admin" class="form-control" placeholder="Masukan Email admin" value="<?php echo $data['email_admin'] ?>" required oninvalid="this.setCustomValidity('Email admin Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

<img src="<?php echo base_url('assets/img_admin/'.$data['img_admin']) ?>" width="250" height="250"><br>
<label>Ganti Foto</label><br>
<input type="file" class="form-control" name="img_admin"><p></p>

<div class="form-actions text-center">
<a href="<?php echo site_url('admin') ?>"><button class="btn btn-danger" type="button"><i class="ace-icon fa fa-undo bigger-110"></i> Batal</button></a>
<button class="btn btn-primary" type="submit"><i class="ace-icon fa fa-check bigger-110"></i> Perbaharui</button>
</div>
</fieldset>
</form>
<!--EndForm-->
</div>
</div>
</div>
</div>
</div>
