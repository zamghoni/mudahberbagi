<div class="row">
  <div class="col-sm-12">
    <div class="widget-box">
      <div class="widget-header">
        <h4 class="widget-title"><?php echo $sub; ?></h4>
      </div>
      <div class="widget-body">
        <div class="widget-main no-padding">
          <!--Form-->
          <form method="post" action="<?php echo site_url('donasi/update/'.$data['id_donasi']) ?>" enctype="multipart/form-data">
            <fieldset>

              <label>Judul Donasi</label><br>
              <input type="text" name="judul_donasi" class="form-control" placeholder="Masukan Judul Donasi" value="<?php echo $data['judul_donasi'] ?>" required oninvalid="this.setCustomValidity('Judul Donasi Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Tanggal</label><br>
              <input type="date" name="tgl_donasi" class="form-control" value="<?php echo $data['tgl_donasi'] ?>" required oninvalid="this.setCustomValidity('Judul Donasi Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Jam</label><br>
              <input type="time" name="jam_donasi" class="form-control" value="<?php echo $data['jam_donasi'] ?>" required oninvalid="this.setCustomValidity('Judul Donasi Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Kategori</label><br>
              <select name="id_kategori" class="form-control" required>
                <option value="<?php echo $data['id_kategori'] ?>"><?php echo $data['nama_kategori'] ?></option>
                <?php
                foreach ($row->result_array() as $r) {
                  ?>
                  <option value="<?php echo $r['id_kategori'] ?>"><?php echo $r['nama_kategori']; ?></option>
                <?php } ?>
              </select><p></p>

              <label>Isi Donasi</label><br>
              <textarea name="isi_donasi" class="form-control ckeditor" id="ckeditor" placeholder="isi Donasi" rows="5" required><?php echo $data['isi_donasi'] ?></textarea>
              <p></p>

              <img src="<?php echo base_url('assets/img_donasi/'.$data['img_donasi']) ?>" width="400" height="300"><br>
              <label>Ganti Foto</label><br>
              <input type="file" name="img_donasi" class="form-control"><p></p>

              <div class="form-actions text-center">
                <a href="<?php echo site_url('donasi') ?>"><button class="btn btn-danger" type="button"><i class="ace-icon fa fa-undo bigger-110"></i> Batal</button></a>
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
