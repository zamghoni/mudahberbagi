<!-- Home Slider -->
<div class="home-slider">
    <div class="item">
        <div class="slider-image">
            <img alt="slide" src="<?php echo base_url(); ?>/assets/frontend/images/slider/slider mudah berbagi.jpg">
        </div>
        <div class="slider-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="slider-image">
            <img alt="slide" src="<?php echo base_url(); ?>/assets/frontend/images/slider/baitulmaal.jpg">
        </div>
        <div class="slider-content">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fun Fact -->
<div class="fun-fact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 single-fact">
                <div class="facet-overlay"></div>
                <div class="fact-wrap">
                    <div class="fact-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                    <div class="fact-details">
                        <div class="fact-count"><?= $total_donatur; ?></div>
                        <div class="fact-info">Total Donatur</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 single-fact">
                <div class="facet-overlay"></div>
                <div class="fact-wrap">
                    <div class="fact-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                    <div class="fact-details">
                        <div class="fact-count"><?= number_format($total_donasi['total']); ?></div>
                        <div class="fact-info">Dana Terkumpul</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 single-fact">
                <div class="facet-overlay"></div>
                <div class="fact-wrap">
                    <div class="fact-icon"><i class="fa fa-yelp" aria-hidden="true"></i></div>
                    <div class="fact-details">
                        <div class="fact-count"><?= number_format($target_donasi['target'] - $total_donasi['total']); ?></div>
                        <div class="fact-info">Dana Belum Terkumpul</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Intro -->
<div class="intro pd-top-100 pd-bottom-100 text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="intro-title">SELAMAT DATANG <span></span></h1>
                <h2>Mudah Berbagi Indonesia's Crowdfounding</h2><br></br>
                <p>"Apapun harta yang kalian infakkan maka Allah SWT pasti akan menggantikannya, Dan dia sebaiknya-baiknya pemberi rezeki"(QS. Saba Ayat 39)</p>
                <p>Mudah berbagi adalah salah satu program dari Lembaga Baitul Maal BMT BUM Tegal, Baitul Maal wa Tamwil Bina Umat Mandiri (BMT BUM) merupakan sebuah lembaga syariah yang berorientasi pada bisnis ekonomi syariah dan juga sebagai lembaga yang mengelelola dana zakat, infaq, sedekah, serta wakaf (lembaga sosial) untuk pemberdayaan masyarakat.</p>
                <br></br>
                <?php if ($this->session->userdata('IsDonatur') == 1) {
                  ?>
                  <a class="btn btn-red" href="#donasi">Donate Now</a>
                <?php } else {
                  ?>
                  <a class="btn btn-red" href="<?php echo site_url('logindonatur') ?>">Donate Now</a>
                <?php } ?>
                <a class="btn btn-success" href="https://wa.me/6285229654099"><i class="fa fa-whatsapp"></i> WhatsApp</a>
            </div>
        </div>
    </div>
</div>

<!-- Recent Cause -->
<div class="recent-cause pd-top-80 pd-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p id="donasi"></p>
                <h2 class="section-title">Donasi <i class="fa fa-flag"></i></h2>
            </div>
            <?php
            foreach ($donasi->result() as $key => $row) {
            ?>
                <div class="col-sm-4 recent-cause-list">
                    <img alt="cause" src="<?php echo base_url(); ?>/assets/img_donasi/<?= $row->img_donasi ?>">
                    <div class="recent-cause-summary">
                        <div class="recent-cause-content">
                            <h3 class="recent-cause-title"><a href="<?php echo site_url('haldonasi/read/') . $row->id_donasi; ?>"><?= $row->judul_donasi; ?></a></h3>
                            <div class="cause-location"><i class="fa fa-calendar" aria-hidden="true"></i> <?= $row->tgl_donasi; ?></div>
                            <div class="text-justify"><?= substr($row->isi_donasi, 0, 200) . ' ...'; ?></div>
                            <?php if ($this->session->userdata('IsDonatur') == 1) {
                              ?>
                              <a class="btn mg-top-30" href="<?php echo site_url('haldonasi/kontribusi/') . $row->id_donasi; ?>">Donate</a>
                            <?php } else {
                              ?>
                              <a class="btn mg-top-30" href="<?php echo site_url('logindonatur') ?>">Donate</a>
                            <?php } ?>
                        </div>
                        <div class="recent-cause-funding">
                            <div class="fund-line">
                                <div class="fill" style="height: <?php
                                                                    if ($row->total == null) {
                                                                        echo '0%;';
                                                                    } else {
                                                                        echo $row->total / $row->target_donasi * 100 . '%;';
                                                                    }

                                                                    ?>"></div>
                            </div>
                            <div class="fund-percent"><?php
                                                        if ($row->total == null) {
                                                            echo '0';
                                                        } else {
                                                            echo $row->total / $row->target_donasi * 100;
                                                        }

                                                        ?>%</div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="text-center">
    <div class="pt-5 pb-5">
      <?php echo $halaman;?>
    </div>
  </div>
    </div>
</div>

<!-- Event -->
<div class="event-section pd-top-80">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Upcoming Program <i class="fa fa-star"></i></h2>
            </div>
            <div id="event-carousel" class="event-carousel owl-carousel" style="clear: left;">
                <div class="item equal-height-wrap">
                    <div class="col-sm-6 no-pad equal-height-inner">
                        <img src="<?php echo base_url(); ?>/assets/frontend/images/event/qurban.jpg" alt="carousel">
                    </div>
                    <div class="col-sm-6 no-pad bg equal-height-inner">
                        <div class="slide-detels">
                            <div class="eventcount" id="count1"></div>
                            <h3 class="slide-title">🐐🐑 QURBAN BIKIN HAPPY</h3>
                            <h4 class="slide-title">🌿AMAL PALING DICINTAI ALLAH</h4>
                            <p class="sort-content">Sobat sekalian baginda Nabi Muhammad shallallahu ‘alaihi wa sallam bersabda, “Tidaklah anak Adam melakukan suatu amalan pada hari Nahr (Iedul Adha) yang lebih dicintai oleh Allah melebihi mengalirkan darah (qurban), maka hendaknya kalian merasa senang karenanya.” (HR. Tirmidzi, Ibnu Majah dan Al Hakim dengan sanad sahih. Taudhihul Ahkam, IV/450)</p>
                            <p class="sort-content">💕Maka mari kita manfaatkan moment setahun sekali ini dengan amalan yang paling dicintai Allah dihari Nahr nanti: Berqurban. Lebih utama lagi karena qurban melalui Baitul Maal BMT BUM juga akan dibagikan kepada keluarga anak anak Yatim di Tegal dan sekitarnya</p>

                            <div class="slide-meta">
                                <span><i class="fa fa-calendar-o"></i>30-31 Juli 2020</span>
                                <span><i class="fa fa-clock-o"></i>08.00 am - selesai</span>
                            </div>
                            <div class="slide-meta">
                                <span><i class="fa fa-font-awesome"></i>Kantor Baitul Maal Tegal</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item equal-height-wrap">
                    <div class="col-sm-6 no-pad equal-height-inner">
                        <img src="<?php echo base_url(); ?>/assets/frontend/images/event/event-2.jpg" alt="carousel">
                    </div>
                    <div class="col-sm-6 no-pad bg equal-height-inner">
                        <div class="slide-detels">
                            <div class="eventcount" id="count2"></div>
                            <h3 class="slide-title">Nusquam adipisci hendrerit adcum dicea.</h3>
                            <p class="sort-content">Diam graeco . Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.Diam graeco sententiae cu vel, ad esse purto ubique vim. Mea in semper patrioque interesset. Sed et mutat splendide, cum te labore virtute urbanitas. Duo at aeque exerci philosophia.</p>
                            <div class="slide-meta">
                                <span><i class="fa fa-calendar-o"></i>21 November, 2016</span>
                                <span><i class="fa fa-clock-o"></i>10 : 30am</span>
                            </div>
                            <div class="slide-meta">
                                <span><i class="fa fa-font-awesome"></i>Convetion Hall, Las vegus, USA</span>
                            </div>
                            <div class="speaker">
                                <div class="speaker-text">
                                    <i class="fa fa-bullhorn"></i>Speakers
                                </div>
                                <div class="speaker-thumb">
                                    <img src="<?php echo base_url(); ?>/assets/frontend/images/event/speaker/4.jpg" alt="speaker">
                                    <img src="<?php echo base_url(); ?>/assets/frontend/images/event/speaker/5.jpg" alt="speaker">
                                    <img src="<?php echo base_url(); ?>/assets/frontend/images/event/speaker/6.jpg" alt="speaker">
                                </div>
                            </div>
                            <div class="join-list">
                                <a class="btn" href="<?php echo base_url(); ?>/assets/frontend/#">JOIN NOW</a>
                                <div class="social-icon">
                                    <a href="<?php echo base_url(); ?>/assets/frontend/#"><i class="fa fa-facebook-official"></i></a>
                                    <a href="<?php echo base_url(); ?>/assets/frontend/#"><i class="fa fa-twitter-square"></i></a>
                                    <a href="<?php echo base_url(); ?>/assets/frontend/#"><i class="fa fa-google-plus-square"></i></a>
                                    <a href="<?php echo base_url(); ?>/assets/frontend/#"><i class="fa fa-share-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog -->
<div id="blog" class="blog-section pd-top-80 pd-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Berita <i class="fa fa-file-text-o"></i></h2>
            </div>
            <?php foreach ($berita as $row) {
            ?>
                <div class="col-sm-4">
                    <div class="blog-single">
                        <div class="thumb">
                            <img src="<?php echo base_url(); ?>/assets/img_berita/<?= $row['img_berita'] ?>" alt="blog image">
                        </div>
                        <div class="post-desk">
                            <div class="post-meta">
                                <span class="meta-left"><i class="fa fa-tags"></i><a href="#">Berita</a></span>
                                <span class="meta-right"><i class="fa fa-comments-o"></i>0</span>
                            </div>
                            <h3 class="title"><a href="<?php echo site_url('halberita/read/') . $row['id_berita']; ?>"><?= $row['judul_berita']; ?></a></h3>
                            <p class="category-meta"><i class="fa fa-folder-open" aria-hidden="true"></i><a href="#">Berita</a></p>
                            <div class="text-justify">
                                <?= substr($row['isi_berita'], 0, 200) . ' ...'; ?><a href="<?php echo site_url('halberita/read/') . $row['id_berita']; ?>">[Lihat Selengkapnya]</a>
                            </div>
                        </div>
                        <div class="post-author">
                            <div class="thumb">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/author/1.jpg" alt="author">
                            </div>
                            <div class="name">
                                oleh Admin
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- Gallery -->
<div class="home-gallery pd-top-80">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Dokumentasi</h2>
            </div>
            <div class="col-sm-12 total-photo">
                <div class="photo-carousel">
                    <div class="item">
                        <img alt="gallery" src="<?php echo base_url(); ?>/assets/frontend/images/gallery/dok1.jpg">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="<?php echo base_url(); ?>/assets/frontend/images/gallery/dok2.jpg">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="<?php echo base_url(); ?>/assets/frontend/images/gallery/dok3.jpg">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="<?php echo base_url(); ?>/assets/frontend/images/gallery/dok4.jpg">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="<?php echo base_url(); ?>/assets/frontend/images/gallery/dok5.jpg">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="<?php echo base_url(); ?>/assets/frontend/images/gallery/dok6.jpg">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="<?php echo base_url(); ?>/assets/frontend/images/gallery/dok7.jpg">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="<?php echo base_url(); ?>/assets/frontend/images/gallery/dok8.jpg">
                    </div>
                    <div class="item">
                        <img alt="gallery" src="<?php echo base_url(); ?>/assets/frontend/images/gallery/dok9.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clients -->
<div style="margin-top:80px" class="team-section pd-bottom-80">
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <h2 class="section-title">Our Team</h2>
          </div>
            <div class="col-md-12">
                <div class="team-isotope" style="clear:left;">
                    <div class="col-sm-6 col-md-4 col-lg-3 item development">
                        <div class="thumb">
                            <img src="<?php echo base_url(); ?>/assets/frontend/images/partner/cc.jpg" alt="our-team">
                        </div>
                        <div class="member-details">
                            <div class="meta-data">
                                <h3 class="title">NELY LUSIANA</h3>
                                <div class="tag">Project Manager</div>
                            </div>
                            <div class="meta-social">
                                <a class="btn" href="#">Mail me</a>
                                <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square"></i></a>
                                <a href="#"><i class="fa fa-tumblr"></i></a>
                                <a href="#"><i class="fa fa-behance-square"></i></a>
                                <a href="#"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item service executive">
                        <div class="thumb">
                            <img src="<?php echo base_url(); ?>/assets/frontend/images/partner/widia.jpg" alt="our-team">
                        </div>
                        <div class="member-details">
                            <div class="meta-data">
                                <h3 class="title">WIDYA ANISA</h3>
                                <div class="tag">Analis Founder</div>
                            </div>
                            <div class="meta-social">
                                <a class="btn" href="#">Mail me</a>
                                <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square"></i></a>
                                <a href="#"><i class="fa fa-tumblr"></i></a>
                                <a href="#"><i class="fa fa-behance-square"></i></a>
                                <a href="#"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item executive service operation development">
                        <div class="thumb">
                            <img src="<?php echo base_url(); ?>/assets/frontend/images/partner/wulan.jpg" alt="our-team">
                        </div>
                        <div class="member-details">
                            <div class="meta-data">
                                <h3 class="title">TRI WULAN SISOLLANDARI</h3>
                                <div class="tag">Web Developer</div>
                            </div>
                            <div class="meta-social">
                                <a class="btn" href="#">Mail me</a>
                                <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square"></i></a>
                                <a href="#"><i class="fa fa-tumblr"></i></a>
                                <a href="#"><i class="fa fa-behance-square"></i></a>
                                <a href="#"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to action -->
<!-- Testimonial -->
<div id="testimonials" class="testimonial-section pd-top-80 pd-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">Thanks to <i class="fa fa-heart"></i></h2>
            </div>
            <div class="col-sm-12 testimonial-carousel owl-carousel">
                <div class="item">
                    <h3 class="tm-title">Universitas Bina Sarana Informatika Tegal</h3>
                    <p>
                        Terimakasih untuk Universitas Bina Sarana Informatika Tegal atas support, ilmu, dan kinerja untuk Lembaga Baitul Maal BMT BUM Tegal
                    </p>
                    <img src="<?php echo base_url(); ?>/assets/frontend/images/partner/cc.jpg" alt="client">
                    <div class="testimonial-client">Nely Lusiana <span>Project Manager</span></div>
                </div>
                <div class="item">
                    <h3 class="tm-title">First true generator on the Interne</h3>
                    <p>
                        Standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                    </p>
                    <img src="<?php echo base_url(); ?>/assets/frontend/images/reviewer/2.jpg" alt="client">
                    <div class="testimonial-client">John Doe <span>Assistant Manager, GSM Group</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newletter -->

<!-- Footer -->
<div class="footer-section">
    <div class="footer-top pd-top-80">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 footer-widget">
                    <div class="footer-logo">
                        <img class="retina" src="<?php echo base_url(); ?>/assets/frontend/images/baitul maal.jpg" alt="logo">
                        <p>Kami sangat mengharap bantuan dari donatur yang dermawan untuk semua program yang sedang kami jalani, semoga Allah SWT menggantikan rezeki para donatur dengan berlipat-lipat ganda</p>
                        <div class="footer-social">
                            <a href="<?php echo base_url(); ?>/assets/frontend/#"><i class="fa fa-twitter-square"></i></a>
                            <a href="<?php echo base_url(); ?>/assets/frontend/#"><i class="fa fa-linkedin-square"></i></a>
                            <a href="<?php echo base_url(); ?>/assets/frontend/#"><i class="fa fa-vimeo-square"></i></a>
                            <a href="<?php echo base_url(); ?>/assets/frontend/#"><i class="fa fa-facebook-square"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 footer-widget">
                    <div class="footer-address">
                        <h3 class="footer-title">Alamat Kantor</h3>
                        <p>Jl. Perintis Kemerdekaan No.61, Panggung, Kec. Tegal Tim., Kota Tegal,
                            <br> Jawa Tengah 52122</p>
                        <p>
                            <i class="fa fa-phone"></i> (0283) 6148393
                            <br>
                            <i class="fa fa-envelope-o"></i>admin@baitulmaal.com
                        </p>
                        <div class="footer-map">
                            <a href="<?php echo base_url(); ?>/assets/frontend/#"><i class="fa fa-map-marker"></i>See in map</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span><a href="<?php echo base_url(); ?>/assets/frontend/#">N2W Team</a></span>
                    <span>&copy; 2020</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Common JS Plugin-->
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/retina.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/jquery.scrollUp.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/headroom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/jQuery.headroom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/sticky-kit.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/jquery.waypoints.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/jquery.counterup.min.js"></script>

<!-- Google Map -->
<script src="<?php echo base_url(); ?>/assets/frontend/#" async defer></script>

<!-- Custom JS -->
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/frontend/js/custom.js"></script>
</body>

</html>
