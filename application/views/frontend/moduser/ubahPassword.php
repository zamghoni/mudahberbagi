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
                <div class="col col-md-6" style="float: none; margin: 0 auto;">
                    <div class="billing-address">
                        <h3 class="address-header"><?= $judul; ?></h3>
                        <form id="contact-form" class="contact-address" action="<?php echo site_url('user/ubahPassword'); ?>" method="POST" enctype="multipart/form-data">
                            <?= $this->session->flashdata('message'); ?>
                            <h5 class="address-title">Password Lama</h5>
                            <input class="input" type="password" placeholder="Password Lama" name="password_lama" />
                            <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                            <h5 class="address-title">Password Baru</h5>
                            <input class="input" type="password" placeholder="Password Baru" name="password_baru1" />
                            <h5 class="address-title">Konfirmasi Password Baru</h5>
                            <input class="input" type="password" placeholder="Konfirmasi Password Baru" name="password_baru2" />
                            <?= form_error('password_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                            <br>
                            <input type="submit" value="Simpan" class="btn btn-primary btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>