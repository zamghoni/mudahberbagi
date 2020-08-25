        <!--================ Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Berita Kami</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Home Banner Area =================-->
        <!--================Blog Categorie Area =================-->

        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <?php foreach ($berita as $row) {
                                ?>
                                <article class="row blog_item">
                                    <div class="col-md-3">
                                        <div class="blog_info text-right">
                                            <ul class="blog_meta list">
                                                <li><a href="#">Admin<i class="lnr lnr-user"></i></a></li>
                                                <li><a href="#">01 Dec, 2019<i class="lnr lnr-calendar-full"></i></a></li>
                                                <li><a href="#">103 Views<i class="lnr lnr-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="blog_post">
                                            <img src="<?php echo base_url(); ?>/assets/img_berita/<?= $row['img_berita'] ?>" alt="">
                                            <div class="blog_details">
                                                <a href="<?= site_url('halberita/read/') . $row['id_berita']; ?>">
                                                    <h2><?= $row['judul_berita']; ?></h2>
                                                </a>
                                                <p><?= substr($row['isi_berita'], 0, 250) . ' ...'; ?></p>
                                                <a href="<?= site_url('halberita/read/') . $row['id_berita']; ?>" class="blog_btn">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="<?php echo base_url(); ?>/assets/frontend/img/blog/author.png" alt="">
                                <h4>Charlie Barber</h4>
                                <p>Senior blog writer</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                                <div class="br"></div>
                            </aside>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
