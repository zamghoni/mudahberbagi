<div class="row">
  <div class="col-sm-12">
    <div class="widget-box">
      <div class="widget-header">
        <h4 class="widget-title"><?php echo $sub; ?></h4>
      </div>
      <div class="widget-body">
        <div class="widget-main no-padding">
          <!--Form-->
          <form method="post" action="<?php echo site_url('berita/save') ?>" enctype="multipart/form-data">
            <fieldset>

              <label>Judul Berita</label><br>
              <input type="text" name="judul_berita" class="form-control" placeholder="Masukan Judul Berita" value="" required oninvalid="this.setCustomValidity('Judul Berita Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Kategori</label><br>
              <select name="id_kategori" required="this.setCustomValidity('Judul Donasi Harus Di Isi')" oninput="setCustomValidity('')" class="form-control" >
                <option value="">- Pilih kategori -</option>
                <?php
                foreach ($row->result_array() as $r) {
                  ?>
                  <option value="<?php echo $r['id_kategori'] ?>"><?php echo $r['nama_kategori']; ?></option>
                <?php } ?>
              </select><p></p>


              <label>Isi Berita</label><br>
              <textarea name="isi_berita" class="form-control ckeditor" id="ckeditor" placeholder="isi Berita" required oninvalid="this.setCustomValidity('Isi Berita Harus Di Isi')" oninput="setCustomValidity('')"></textarea>

              <label>Foto Berita</label><br>
              <input type="file" name="img_berita" class="form-control" required oninvalid="this.setCustomValidity('Foto Berita Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <div class="form-actions text-center">
                <a href="<?php echo site_url('berita') ?>"><button class="btn btn-danger" type="button"><i class="ace-icon fa fa-undo bigger-110"></i> Batal</button></a>
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
