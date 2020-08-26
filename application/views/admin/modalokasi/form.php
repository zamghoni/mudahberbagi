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
          <?php
          $attributes = array('onsubmit' => 'return tambah(this)');
          echo form_open_multipart('alokasi/process',$attributes); ?>
          <fieldset>
            <input type="hidden" name="id_alokasi" value="<?=$row->id_alokasi?>">
            <label>Jenis Donasi</label>
            <select class="form-control" name="id_donasi" required oninvalid="this.setCustomValidity('Pilih Jenis Donasi')" oninput="setCustomValidity('')">
              <option value="">-- Pilih Jenis Donasi --</option>
              <?php
              $no = 1;
              foreach ($donasi->result() as $key => $data) { ?>
                <option value="<?=$data->id_donasi?>" <?=$data->id_donasi == $row->id_donasi ? ' selected' : null?>> <?=$no.') '.$data->judul_donasi.' '.rupiah($data->target_donasi)?></option>
                <?php $no++;
              }
              ?>
            </select><p></p>

            <label>Nama Penerima</label><br>
            <input type="text" name="nama_penerima" class="form-control" placeholder="Masukan Nama Penerima" value="<?php echo $row->nama_penerima ?>" required oninvalid="this.setCustomValidity('Nama Penerima Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

            <label>Jumlah Dana Alokasi</label>
            <input type="number" name="total_alokasi" value="<?=$row->total_alokasi?>" class="form-control" placeholder="Jumlah dana alokasi" required oninvalid="this.setCustomValidity('Nominal Alokasi Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

            <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
            <label>Alamat Penerima</label><br>
            <textarea name="alamat_penerima" class="form-control" placeholder="Alamat Penerima" required><?php echo $row->alamat_penerima ?></textarea>
            <script>CKEDITOR.replace( 'alamat_penerima' );</script>
            <p></p>

            <label>Keterangan Alokasi</label><br>
            <textarea name="ket_alokasi" class="form-control" placeholder="Keterangan Alokasi" required><?php echo $row->ket_alokasi ?></textarea>
            <script>CKEDITOR.replace( 'ket_alokasi' );</script>
            <p></p>

            <?php if ($sub == 'Edit'){ ?>
              <label>Tanggal Alokasi</label>
              <input type="date" class="form-control" name="dibuat_pada" value="<?=$row->dibuat_pada?>"><p></p>
              <?php if ($row->dokumentasi != null){ ?>
                <img src="<?php echo base_url('assets/dokumentasi/'.$row->dokumentasi) ?>" width="400" height="300"><br><p></p>
              <?php } ?>
            <?php } ?>

            <label>Foto Dokumentasi</label><br>
            <input type="file" name="dokumentasi" class="form-control"><p></p>
            <input type="hidden" name="old_dokumentasi" value="<?=$row->dokumentasi?>">

            <div class="form-actions text-center">
              <a href="<?php echo site_url('berita') ?>"><button class="btn btn-danger" type="button"><i class="ace-icon fa fa-undo bigger-110"></i> Batal</button></a>
              <button type="submit" name="<?=$sub?>" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
            </div>
          </fieldset>
          <?php echo form_close(); ?>
          <!--EndForm-->
        </div>
      </div>
    </div>
  </div>
</div>
