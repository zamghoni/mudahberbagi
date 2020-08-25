    <!-- Page title -->
    <div class="page-title-wrap">
        <div class="page-title-overlay"></div>
        <div class="page-title-info">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><?= $judul; ?></li>
            </ol>
            <h1 class="page-title"><?= $judul; ?></h1>
        </div>
    </div>

    <!-- Checkout section -->
    <div class="checkout-section pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="float: none; margin: 0 auto;">
                    <div class="billing-address">
                        <h3 class="address-header"><?= $judul; ?></h3>
                        <br>
                        <div class="pd-100">
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="card" style="padding:50px">
                                    <div class="card-body">
                                      <div class="table-responsive" style="width: 100%;">
                                        <table id="example" class="table table-striped table-bordered table-hover">
                                          <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Nama Donasi</th>
                                              <th>Nominal</th>
                                              <th>Bukti Pembayaran</th>
                                              <th style="width: 30%; vertical-align: middle;">Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($donasi->result_array() as $row) {
                                              ?>
                                              <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $row['judul_donasi'] ?></td>
                                                <td><?php echo "Rp. " . number_format($row['nominal'], 0, "", "."); ?></td>
                                                <td class="text-center">
                                                  <?php
                                                  if ($row['bukti_pembayaran'] == "0") {
                                                    ?>
                                                    <a href="<?php echo site_url('user/uploadBukti/') . $row['id_transaksi']; ?>" class="btn btn-primary btn-sm">Upload Bukti</a>
                                                    <?php
                                                  } else {
                                                    echo "Sudah Upload Bukti";
                                                  }
                                                  ?>
                                                </td>
                                                <th>
                                                  <?php
                                                  if ($row['status_pembayaran'] == "1") {
                                                    echo "Sudah Dibayarkan";
                                                  } elseif ($row['status_pembayaran'] == "0") {
                                                    echo "Belum Upload Bukti Pembayaran";
                                                  } elseif($row['status_pembayaran'] == "3") {
                                                    echo "Bukti Pembayaran Tidak Bisa Terbaca, Silahkan Upload Ulang";
                                                  } else {
                                                    echo "Menunggu Konfirmasi Pembayaran";
                                                  }
                                                  ?></th>
                                                </tr>
                                                <?php
                                                $no++;
                                              }
                                              ?>
                                            </tbody>
                                          </table>
                                        </div>

                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
