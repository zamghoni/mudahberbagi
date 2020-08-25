<!-- Page title -->
<div class="page-title-wrap">
    <div class="page-title-overlay"></div>
    <div class="page-title-info">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><?= $donasi['judul_donasi']; ?></li>
        </ol>
        <h1 class="page-title"><?= $donasi['judul_donasi']; ?></h1>
    </div>
</div>

<!-- blog start -->
<div class="cause-details-section pd-top-100 mg-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3" id="cause-sticky">
                <div class="sidebar-left">
                    <a class="btn-donate" href="<?php echo site_url('haldonasi/kontribusi/') . $donasi['id_donasi']; ?>">donasi sekarang</a>
                    <div class="cause-leader hidden-xs">
                        <h3>Mudah Berbagi Team</h3>
                        <div class="thumb">
                            <img src="<?php echo site_url('assets/frontend/'); ?>images/our-team/baitulmaal.jpg" alt="leader">
                        </div>
                        <p>Lembaga Sosial Kemanusiaan di Tegal dan sekitar dengan berbagai program untuk membantu sesama. Dilengkapi Ambulan Gratis dan berbagai program pemberdayaan ekonomi masyarakat.</p>
                        <span class="cause-mail"><i class="fa fa-envelope-o"></i>baitulmaalbum@gmail.com</span>
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                            <a href="#"><i class="fa fa-google-plus-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cause-details">
                            <div class="row">
                                <div class="col-sm-6 col-md-8">
                                    <img src="<?php echo site_url('assets/img_donasi/') . $donasi['img_donasi']; ?>" alt="Gambar">
                                    <div class="cause-summary">
                                        <h3 style="">Tentang Donasi</h3>
                                        <p class="text-justify"><?= $donasi['isi_donasi']; ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="fund">
                                        <div class="fund-top">
                                            <h5 class="fund-title">Target Donasi</h5>
                                            <h3>RP. <?= number_format($donasi['target_donasi'], 0, '.', '.'); ?></h3>
                                        </div>
                                        <div class="fund-bottom">
                                            <h5 class="fund-title">Dana Terkumpul</h5>
                                            <h3><?php
                                                if ($donasi_masuk['total'] == '') {
                                                    echo 'Belum ada donasi';
                                                } else {
                                                    echo "Rp. " . number_format($donasi_masuk['total'], '0', '.', '.');
                                                }
                                                ?>
                                            </h3>
                                            <div class="fund-progress">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <?php
                                                        if ($donasi_masuk['total'] == '') {
                                                            echo '0';
                                                        } else {
                                                            echo number_format($donasi_masuk['total'] / $donasi_masuk['target_donasi'] * 100, '0', '.', '.');
                                                        }
                                                        ?>%
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="x-fundline">
                                                            <div class="x-fill" style="width: <?php
                                                                                                if ($donasi_masuk['total'] == '') {
                                                                                                    echo '0';
                                                                                                } else {
                                                                                                    echo $donasi_masuk['total'] / $donasi_masuk['target_donasi'] * 100;
                                                                                                }
                                                                                                ?>%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="cause-goal">
                                        <p>"Bersegeralah bersedekah, sebab bala bencana tidak pernah bisa mendahului sedekah." (HR. Imam Baihaqi) </p>
                                    </div>
                                    <div class="cause-feature">
                                        <h3>Mari salurkan Donasi Terbaik kita. Berbagi bisa dari rumah aja.</h3>
                                        <ul class="feature-list">
                                            <li>💳 Transfer Rekening melalui : </li>
                                            <li>    - BNI Syariah, Kode Bank : 427,</li>
                                            <li>      Norek 0331725862</li>
                                            <li>      an KSPPS BMT BUM Tegal</li>
                                            <li>📱Konfirmasi donasi: 085.878.888.789</li>
                                            <li>"Anda donasi dari rumah aja,  biar kami yang menyebar manfaatnya"</li>
                                        </ul>
                                    </div>
                                    <div class="cause-solution">
                                        <p>#beasiswaASA #beasiswategal #donasimualaf
#zakatsegerakan #zakatbikinhappy #sedekahbikinberkah #dirumahaja #lawancovid19 #baitulmaalbumtegal #infotegal #kabartegal #infososialtegal #zakatbaitulmaalbum #donasiterbaik #bersamalawancorona #donasitegal #baitulmaalbum #lembagasosialtegal #foz #forumzakat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mg-top-20">
            <div class="col-sm-12">
                <h3 class="single-related-cause-title">Program Donasi</h3>
                <div class="single-recent-cause-wrap">
                    <div class="row">
                        <?php
                        foreach ($donasi_lain as $row) {
                        ?>
                            <div class="col-sm-3">
                                <div class="single-related-cause">
                                    <img src="<?php echo site_url('assets/img_donasi/') . $row['img_donasi']; ?>" alt="blog">
                                    <h3 class="title"><a href="<?php echo site_url('haldonasi/read/') . $row['id_donasi']; ?>"><?= $row['judul_donasi']; ?></a></h3>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>
</div>
