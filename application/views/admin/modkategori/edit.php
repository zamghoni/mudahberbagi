<div class="row">
<div class="col-sm-12">
<div class="widget-box">
<div class="widget-header">
<h4 class="widget-title"><?php echo $sub; ?></h4>
</div>
<div class="widget-body">
<div class="widget-main no-padding">
  <!--Form-->
  <form method="post" action="<?php echo site_url('kategori/update/'.$data['id_kategori']) ?>">
  <fieldset>

  <label>Kategori</label><br>
  <input type="text" name="nama_kategori" class="form-control" placeholder="Masukan Nama Kategori" value="<?php echo $data['nama_kategori'] ?>" required oninvalid="this.setCustomValidity('Nama Kategori Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <div class="form-actions center">
  <button class="btn btn-info" type="submit"><i class="ace-icon fa fa-check bigger-110"></i>Perbarui</button>
  <a href="<?php echo site_url('kategori') ?>"><button class="btn btn-warning" type="button"><i class="ace-icon fa fa-undo bigger-110"></i>Batal</button></a>
  </div>
  </fieldset>
  </form>
  <!--EndForm-->
</div>
</div>
</div>
</div>
</div>
