<div class="col-md-9">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-center">Ubah Profile</h4>
          <p></p>
          <form class="" action="<?php echo site_url('user/save_profile'); ?>" method="post">
            <div class="row">
              <div class="col-md-5">
                <label>Nama Lengkap</label><br>
                <input type="text" class="form-control" name="nama_donatur" value="<?php echo $data['nama_donatur']; ?>">
                <p></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <label>Email</label><br>
                <input type="email" class="form-control" name="email_donatur" value="<?php echo $data['email_donatur']; ?>">
                <p></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <label>No HP</label><br>
                <input type="text" class="form-control" name="hp_donatur" value="<?php echo $data['hp_donatur']; ?>">
                <p></p>
              </div>
            </div>
            <input type="hidden" name="kode_donatur" value="<?php echo $data['kode_donatur'] ?>">
            <div class="row">
              <div class="col-md-5">
                <label>Foto</label><br>
                <img src="<?php echo base_url('assets/img_donatur/') . $data['img_donatur'] ?>" alt="<?php echo $data['nama_donatur'] ?>" width="120" height="130"><br>
                <input type="file" class="form-control" name="img_donatur">
                <p></p>
              </div>
            </div>
            <button type="submit" name="Simpan" class="btn btn-primary">Simpan</button>
            <a href="<?php echo site_url('user/profile') ?>"><button type="button" name="Batal" class="btn btn-danger">Batal</button></a>
          </form>

        </div>

      </div>
    </div>
  </div>

</div>
</div>
</div>
</div>
<br>
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