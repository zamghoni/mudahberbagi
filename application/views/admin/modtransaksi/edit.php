<div class="row">
  <div class="col-sm-12">
    <div class="widget-box">
      <div class="widget-header">
        <h4 class="widget-title"><?php echo $sub; ?></h4>
      </div>
      <div class="widget-body">
        <div class="widget-main no-padding">
          <!--Form-->
          <form method="post" action="<?php echo site_url('transaksi/update/'.$data['id_transaksi']) ?>">
            <fieldset>

              <label>ID Transaksi</label><br>
              <input type="text" name="id_transaksi" class="form-control" placeholder="Masukan ID Transaksi" value="<?php echo $data['id_transaksi'] ?>" required oninvalid="this.setCustomValidity('ID Transaksi Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Nominal</label><br>
              <input type="number" name="nominal" class="form-control" placeholder="Masukan Nominal" value="<?php echo $data['nominal'] ?>" required oninvalid="this.setCustomValidity('Nominal Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Dukungan</label><br>
              <input type="text" name="dukungan" class="form-control" placeholder="Masukan Dukungan" value="<?php echo $data['dukungan'] ?>" required oninvalid="this.setCustomValidity('Dukungan Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Bukti Pembayaran</label><br>
              <input type="text" name="bukti_pembayaran" class="form-control" placeholder="Masukan Bukti Pembayaran" value="<?php echo $data['status_pembayaran'] ?>" required oninvalid="this.setCustomValidity('Status Pembayaran Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <label>Status Pembayaran</label><br>
              <input type="text" name="status_pembayaran" class="form-control" placeholder="Masukan Status Pembayaran" value="<?php echo $data['status_pembayaran'] ?>" required oninvalid="this.setCustomValidity('Status Pembayaran Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

              <div class="form-actions center">
                <button class="btn btn-info" type="submit"><i class="ace-icon fa fa-check bigger-110"></i>Perbarui</button>
                <a href="<?php echo site_url('transaksi') ?>"><button class="btn btn-warning" type="button"><i class="ace-icon fa fa-undo bigger-110"></i>Batal</button></a>
              </div>
            </fieldset>
          </form>
          <!--EndForm-->
        </div>
      </div>
    </div>
  </div>
</div>
