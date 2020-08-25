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
                        <form id="contact-form" class="contact-address" action="<?php echo site_url('user/saveBukti/') . $this->uri->segment(3); ?>" method="POST" enctype="multipart/form-data">
                            <h5 class="address-title">Bukti Transfer</h5>
                            <input class="input" type="file" placeholder="Bukti Transfer" name="bukti_pembayaran" />
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                            <a href="<?php echo site_url('user/donasi'); ?>" class="btn btn-danger btn-block">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
