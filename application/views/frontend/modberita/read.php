  <!--================ Home Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Detail Berita</h2>
              </div>
          </div>
      </div>
  </section>
  <!--================ End Home Banner Area =================-->

  <!--================Blog Area =================-->
  <section class="blog_area single-post-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 posts-list">
                  <div class="single-post row">
                      <div class="col-lg-12">
                          <div class="feature-img">
                              <img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
                          </div>
                      </div>
                      <div class="col-lg-3  col-md-3">
                          <div class="blog_info text-right">
                              <div class="post_tag">
                                  <a class="active" href="#"><?= $berita['nama_kategori']; ?></a>
                              </div>
                              <ul class="blog_meta list">
                                  <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                  <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                  <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                  <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                              </ul>
                              <ul class="social-links">
                                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                  <li><a href="#"><i class="fa fa-github"></i></a></li>
                                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-9 col-md-9 blog_details">
                          <h2><?= $berita['judul_berita']; ?></h2>
                          <img class="img-fluid w-60" src="<?php echo base_url(); ?>/assets/img_berita/<?= $berita['img_berita'] ?>" alt="<?= $berita['judul_berita'] ?>">
                          <style>
                              p {
                                  text-align: justify !important;
                                  text-justify: inter-word !important;
                              }
                          </style>
                          <p class="excert">
                              <?= $berita['isi_berita']; ?>
                          </p>
                      </div>
                      <div class="col-lg-12">

                      </div>
                  </div>
                  <div class="navigation-area">
                      <div class="row">

                      </div>
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
                          <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
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
  <!--================Blog Area =================--
<div class="footer-bottom">
    <div class="container">
        <div class="row d-flex">
            <p class="col-lg-12 footer-text text-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>
      document.write(new Date().getFullYear());
  </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="<?php echo base_url(); ?>/assets/frontend/web/https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  </p>
  </div>
  </div>
  </div>
  </footer>
  </div>
  <!--================ End footer Area  =================-->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo base_url(); ?>/assets/frontend/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/js/popper.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/js/stellar.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/js/mail-script.js"></script>
  <!--gmaps Js-->
  <script src="<?php echo base_url(); ?>/assets/frontend/js/gmaps.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/js/theme.js"></script>
  <script src="<?php echo base_url(); ?>/assets/frontend/js/jquery.mask.min.js"></script>

  <script type="text/javascript">
      $(document).ready(function() {

          // Format mata uang.
          $('.nominal').mask('0.000.000.000', {
              reverse: true
          });

      })
  </script>
  <!--
<script type="text/javascript">
  var input = document.getElementById('nominal');
  input.addEventListener('keyup', function(e) {
    var number_string = bilangan.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  });
</script>
-->


  </body>

  </html>