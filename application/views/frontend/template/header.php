<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $judul; ?></title>

    <!--Fav and touch icons-->
    <link rel="icon" href="<?php echo base_url(); ?>assets/frontend/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/frontend/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/frontend/images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/frontend/images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/frontend/images/apple-touch-icon-152x152.png">

    <!--Common Styles Plugins-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/magnific-popup.css">

    <!--Google fonts-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> -->
    <!--Custom Style-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/space.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/responsive.css">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="loader-inner">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div> -->
    <!-- header -->
    <div id="header--fixed" class="header">
        <div class="nav-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg-4">
                        <div class="phone">
                            <i class="fa fa-volume-control-phone"></i>(0283) 6148564
                        </div>
                        <div class="email">
                            <i class="fa fa-envelope"></i>baitulmaalbum@gmail.com
                        </div>
                    </div>
                    <div class="hidden-xs hidden-sm col-md-6 col-lg-5">
                        <br>
                    </div>
                    <div class="hidden-xs col-sm-6 col-md-4 col-lg-4">
                    </div>
                </div>
            </div>
        </div>
        <div id="main-nav" class="main-nav">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo site_url('beranda'); ?>"><img class="retina" src="<?php echo base_url(); ?>assets/frontend/images/icon.png" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-navbar">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a class="nav-link" href="<?php echo site_url('beranda') ?>">Beranda</a></li>
                            <li><a class="nav-link" href="<?php echo site_url('halberita') ?>">Berita</a></li>
                            <li><a class="nav-link" href="<?php echo site_url('halprofile'); ?>">Profil</a></li>
                            <li><a href="<?php echo site_url('halkontak'); ?>">Kontak</a></li>
                        </ul>
                        <style>
                            .kanan {
                                margin-top: 25px;
                            }
                        </style>
                        <ul class="nav navbar-nav navbar-right kanan">
                            <?php if ($this->session->userdata('IsDonatur') == 1) {
                            ?>
                                <li class="dropdown">

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url(); ?>/assets/img_donatur/<?= $data['img_donatur']; ?>" width="40" class="rounded-circle mr-1" /> Hi, <?php echo  $this->session->userdata('nama_donatur'); ?><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo site_url('user/profil'); ?>">Profil</a></li>
                                        <li><a href="<?php echo site_url('user/donasi'); ?>">Daftar Donasi</a></li>
                                        <li><a href="<?php echo site_url('user/ubahPassword'); ?>">Ubah Password</a></li>
                                        <li><a href="<?php echo site_url('user/logout'); ?>">Keluar</a></li>
                                    </ul>
                                </li>
                            <?php } else { ?>
                                <li><a class="" href="<?php echo site_url('logindonatur'); ?>">Login</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
