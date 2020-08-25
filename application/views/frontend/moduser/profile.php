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
                        <form id="contact-form" class="contact-address" action="<?php echo site_url('user/simpan'); ?>" method="POST" enctype="multipart/form-data">
                            <h5 class="address-title">Nama Lengkap</h5>
                            <input class="input" type="text" placeholder="Nama Lengkap" name="nama_donatur" value="<?= $data['nama_donatur']; ?>" />
                            <h5 class="address-title">Email</h5>
                            <input class="input" type="text" placeholder="Email" name="email_donatur" value="<?= $data['email_donatur']; ?>" />
                            <h5 class="address-title">No HP</h5>
                            <input class="input" type="text" placeholder="No HP" name="hp_donatur" value="<?= $data['hp_donatur']; ?>" />
                            <h5 class="address-title">Foto</h5>
                            <img src="<?php echo base_url('assets/img_donatur/') . $data['img_donatur']; ?>" alt="foto" width="130">
                            <br>
                            <br>
                            <input class="input" type="file" name="img_donatur" />
                            <input type="submit" value="Simpan" class="btn btn-primary btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
