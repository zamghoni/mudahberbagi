<!--================ End Header Menu Area =================-->
<div class="mb-4 margin1">
    <div class="container margin">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card">
                        <div class="card-header">
                            Menu
                        </div>
                        <div class="list-group-flush">
                            <a href="<?= site_url("user/profile") ?>">
                                <li class="list-group-item">
                                    Profile
                                </li>
                            </a>
                            <a href="<?= site_url("user/orders") ?>">
                                <li class="list-group-item">
                                    Ubah Password
                                </li>
                            </a>
                            <a href="<?= site_url("user/donasi") ?>">
                                <li class="list-group-item">
                                    Transaksi Donasi Anda
                                </li>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="datatable" class="table table-striped table-bordered">
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
                                                        <a href="<?php echo site_url('user/uploadBukti/') . $row['id_transaksi']; ?>" class="btn btn-danger">Upload Bukti</a>
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