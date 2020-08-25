<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Mudah Berbagi - Baitul Maal BMT BUM Tegal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/backend/images/icon/BMT.png">
    <!-- Google Fonts
		============================================ -->
    <link href="<?php echo base_url(); ?>/assets/backend/#" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url(); ?>/assets/backend/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap" style="background-color: #ffffff;">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
        <a href="<?php echo site_url('auth') ?>">
            <img src="<?php echo base_url();?>/assets/backend/images/icon/BMT.png" alt="Mudah Berbagi"><br><h3><b>Mudah Berbagi</b></h3>
        </a>
			</div>
			<div class="content-error">
				<div class="hpanel"  style="border-style: solid; border-width: 2px; border-color:#f0f0f0; padding:20px; border-radius: 5px;">
          <div class="panel-body">
            <form method="POST" action="<?=site_url('auth/login')?>">
              <div class="form-group">
                <label class="control-label" for="username">Username</label>
                <input type="text" placeholder="username" title="Please enter you username" name="kd_admin" id="username" class="form-control" required oninvalid="this.setCustomValidity('Masukkan username disini')" oninput="setCustomValidity('')">
              </div>
              <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" title="Please enter your password" placeholder="******" name="pswd_admin" id="password" class="form-control" required oninvalid="this.setCustomValidity('Masukkan password disini')" oninput="setCustomValidity('')">
              </div>
              <div class="form-group">
                <label class="control-label" for="password"><input type="checkbox" name="i-checks" value="Remember me"> Remember me</label>
              </div>
              <button class="btn btn-success btn-block loginbtn">Login</button>
            </form>
          </div>
        </div>
			</div>
      <div class="text-center m-b-md custom-login">
        <a href="<?=site_url('beranda')?>">Kembali ke home</a>
      </div>
			<div class="text-center login-footer">
				<p>Copyright © 2020. All rights reserved. Template by <a href="<?php echo base_url(); ?>/assets/backend/#/"><b>N2W Team</b></a></p>
			</div>
		</div>
    </div>
    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/backend/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/backend/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/backend/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/main.js"></script>
</body>

</html>
