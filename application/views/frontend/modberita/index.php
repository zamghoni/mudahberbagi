<!-- Page title -->
<div class="page-title-wrap">
    <div class="page-title-overlay"></div>
    <div class="page-title-info">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Our Blog </li>
        </ol>
        <h1 class="page-title">Our Blog</h1>
    </div>
</div>

<!-- blog start -->
<div id="blog" class="blog-section pd-top-100 pd-bottom-100">
    <div class="container">
        <div class="row">
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
                            <?= substr($row['isi_berita'], 0, 200) . ' ...'; ?><a href="<?php echo site_url('halberita/read/') . $row['id_berita']; ?>">[Lihat Selengkapnya]</a>
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
        <div class="row">
            <div class="col-sm-12">
                <nav class="page-navigation">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>