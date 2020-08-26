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
          <form method="post" action="<?php echo site_url('berita/update/'.$data['id_berita']) ?>" enctype="multipart/form-data">
            <fieldset>

              <label>Judul Berita</label><br>
              <input type="text" name="judul_berita" class="form-control" placeholder="Masukan Judul Berita" value="<?php echo $data['judul_berita'] ?>" required oninvalid="this.setCustomValidity('Judul Berita Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Tanggal</label><br>
              <input type="date" name="tgl_berita" class="form-control" value="<?php echo $data['tgl_berita'] ?>" required oninvalid="this.setCustomValidity('Judul Berita Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Jam</label><br>
              <input type="time" name="jam_berita" class="form-control" value="<?php echo $data['jam_berita'] ?>" required oninvalid="this.setCustomValidity('Judul Berita Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Kategori</label><br>
              <select name="id_kategori" class="form-control" required>
                <option value="<?php echo $data['id_kategori'] ?>"><?php echo $data['nama_kategori'] ?></option>
                <?php
                foreach ($row->result_array() as $r) {
                  ?>
                  <option value="<?php echo $r['id_kategori'] ?>"><?php echo $r['nama_kategori']; ?></option>
                <?php } ?>
              </select><p></p>
              <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
              <label>Isi Berita</label><br>
              <textarea name="isi_berita" class="form-control ckeditor" id="ckeditor" placeholder="isi Berita" required><?php echo $data['isi_berita'] ?></textarea>
              <script>CKEDITOR.replace( 'isi_berita' );</script>
              <p></p>

              <img src="<?php echo base_url('assets/img_berita/'.$data['img_berita']) ?>" width="400" height="300"><br><p></p>
              <label>Ganti Foto</label><br>
              <input type="file" name="img_berita" class="form-control"><p></p>
              <input type="hidden" name="old_img_berita" value="<?=$data['img_berita']?>">

              <div class="form-actions text-center">
                <a href="<?php echo site_url('berita') ?>"><button class="btn btn-danger" type="button"><i class="ace-icon fa fa-undo bigger-110"></i> Batal</button></a>
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
