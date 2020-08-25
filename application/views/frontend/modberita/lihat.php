<!-- page title -->
<div class="page-title-wrap">
    <div class="page-title-overlay"></div>
    <div class="page-title-info">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Berita</a></li>
            <li class="active"><?= $berita['judul_berita']; ?></li>
        </ol>
        <h1 class="page-title"><?= $berita['judul_berita']; ?></h1>
    </div>
</div>

<!-- main blog -->
<div class="single-blog-section pd-top-100 pd-bottom-100">
    <div class="blog-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 pd-bottom-50">
                    <div class="single-blog">
                        <div class="blog-details">
                            <div class="thumb-meta">
                                <span class="admin"><i class="fa fa-user"></i>Admin</span>
                                <span class="catagory">
                                    <i class="fa fa-folder-open" aria-hidden="true"></i> <a href="#">Blog</a>
                                </span>
                                <span class="tag">
                                    <i class="fa fa-tags"></i><a href="#">Blog</a>
                                </span>
                                <span class="comments"><i class="fa fa-comments-o"></i>0</span>
                            </div>
                            <div class="blog-content">
                                <div class="text-center" style="margin: auto;width: 50%;">
                                    <img class="img-responsive" src="<?php echo base_url(); ?>/assets/img_berita/<?= $berita['img_berita'] ?>" width="400" alt="single image">
                                </div>
                                <p><?= $berita['isi_berita']; ?></p>
                            </div>

                        </div>
                    </div>
                    <div class="related-blog-section blog-section">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="section-title">Berita Lain <i class="fa fa-file-text-o"></i></h2>
                            </div>
                            <?php
                            foreach ($berita_lain as $row) {
                            ?>
                                <div class="col-sm-4">
                                    <div class="blog-single">
                                        <div class="thumb">
                                            <img src="<?php echo base_url(); ?>/assets/img_berita/<?= $row['img_berita'] ?>" alt="image">
                                        </div>
                                        <div class="post-desk">
                                            <h3 class="title"><a href="<?php echo site_url('halberita/read/') . $row['id_berita']; ?>"><?= $row['judul_berita']; ?></a></h3>
                                        </div>
                                        <div class="post-author">
                                            <div class="thumb">
                                                <img src="<?php echo base_url(); ?>assets/frontend/images/author/1.jpg" alt="image">
                                            </div>
                                            <div class="name">
                                                Admin
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>