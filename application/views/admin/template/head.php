<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | Mudah Berbagi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/backend/img/favicon.ico">
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
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/educate-custon-icon.css">
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
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/data-table/bootstrap-editable.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/backend/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url(); ?>/assets/backend/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
      #footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        /* background-color: red; */
        color: white;
        text-align: center;
      }
      </style>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url(); ?>/assets/backend/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <p></p>
                <a href="<?php echo site_url('beranda') ?>" target="_blank"><img class="main-logo" src="<?php echo base_url(); ?>assets/backend/images/icon/icon.png" alt="" /></a>
                <strong><a href="<?php echo site_url('beranda') ?>"><img src="<?php echo base_url(); ?>/assets/backend/img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                      <p></p>
                      <p></p>
                        <li>
                            <a title="Landing Page" href="<?php echo site_url('beranda_admin') ?>" aria-expanded="false">
                              <span class="fa fa-home icon-wrap" aria-hidden="true"></span>
                              <span class="mini-click-non">Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="fa fa-newspaper-o icon-wrap"></span> <span class="mini-click-non">Berita</span></a>
                            <ul class="submenu-angle collapse" aria-expanded="false">
                                <li><a title="Tambah Berita" href="<?php echo site_url('berita/create') ?>"><span class="mini-sub-pro">Buat Berita</span></a></li>
                                <li><a title="Berita" href="<?php echo site_url('berita') ?>"><span class="mini-sub-pro">Berita</span></a></li>
                                <li><a title="Kategori" href="<?php echo site_url('kategori') ?>"><span class="mini-sub-pro">Kategori</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a title="Donatur" href="<?php echo site_url('donatur') ?>" aria-expanded="false">
                              <span class="fa fa-users icon-wrap" aria-hidden="true"></span>
                              <span class="mini-click-non">Manage Donatur</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#">
            								   <span class="fa fa-reorder icon-wrap sub-icon-mg"></span>
            								   <span class="mini-click-non">Manage Program</span>
								            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                              <li><a title="Tambah Donasi" href="<?php echo site_url('donasi/create') ?>"><span class="mini-sub-pro">Tambah Donasi</span></a></li>
                                <li><a title="Donasi" href="<?php echo site_url('donasi') ?>"><span class="mini-sub-pro">Donasi</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a title="Donatur" href="<?php echo site_url('donatur') ?>" aria-expanded="false">
                              <span class="fa fa-money icon-wrap" aria-hidden="true"></span>
                              <span class="mini-click-non">Alokasi Dana</span>
                            </a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">
                              <span class="fa fa-print icon-wrap sub-icon-mg" ></span>
                              <span class="mini-click-non">Laporan</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="<?php echo site_url('transaksi') ?>"><span class="mini-sub-pro">Transaksi</span></a></li>
                                <li><a title="Add Professor" href="<?php echo site_url('transaksi/rekap') ?>"><span class="mini-sub-pro">Rekap Donasi</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a title="Admin" href="<?php echo site_url('admin') ?>" aria-expanded="false">
                              <span class="fa fa-user icon-wrap" aria-hidden="true"></span>
                              <span class="mini-click-non">Manage Admin</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="<?php echo base_url(); ?>/assets/backend/index.html"><img class="main-logo" src="<?php echo base_url(); ?>/assets/backend/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="<?php echo base_url(); ?>/assets/backend/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                        															<img src="<?php echo base_url('assets/img_admin/') . $this->session->userdata('img_admin'); ?>" alt="" />
                        															<span class="admin-name">Hi, <?php echo  $this->session->userdata('nama_admin'); ?></span>
                        															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="<?php echo site_url('admin/profile/'.$this->session->userdata('kd_admin')) ?>"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="<?php echo site_url('auth/logout') ?>"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="<?php echo base_url(); ?>/assets/backend/#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/index.html">Dashboard v.1</a></li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/index-1.html">Dashboard v.2</a></li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/index-3.html">Dashboard v.3</a></li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/analytics.html">Analytics</a></li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>/assets/backend/events.html">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="<?php echo base_url(); ?>/assets/backend/#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/all-professors.html">All Professors</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/add-professor.html">Add Professor</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/edit-professor.html">Edit Professor</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/professor-profile.html">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="<?php echo base_url(); ?>/assets/backend/#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/all-students.html">All Students</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/add-student.html">Add Student</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/edit-student.html">Edit Student</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/student-profile.html">Student Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="<?php echo base_url(); ?>/assets/backend/#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/all-courses.html">All Courses</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/add-course.html">Add Course</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/edit-course.html">Edit Course</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/course-profile.html">Courses Info</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/course-payment.html">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="<?php echo base_url(); ?>/assets/backend/#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/library-assets.html">Library Assets</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/add-library-assets.html">Add Library Asset</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/edit-library-assets.html">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="<?php echo base_url(); ?>/assets/backend/#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/departments.html">Departments List</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/add-department.html">Add Departments</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/edit-department.html">Edit Departments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="<?php echo base_url(); ?>/assets/backend/#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="<?php echo base_url(); ?>/assets/backend/#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="<?php echo base_url(); ?>/assets/backend/#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="<?php echo base_url(); ?>/assets/backend/#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="<?php echo base_url(); ?>/assets/backend/#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="<?php echo base_url(); ?>/assets/backend/#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="<?php echo base_url(); ?>/assets/backend/#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/login.html">Login</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/register.html">Register</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/lock.html">Lock</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/password-recovery.html">Password Recovery</a>
                                                </li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/404.html">404 Page</a></li>
                                                <li><a href="<?php echo base_url(); ?>/assets/backend/500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div style="margin-top:25px"></div>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#"><?php echo $judul ?></a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod"><?php echo $sub ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top:-40px">

            </div>
<div class="container-fluid" style="margin-bottom:50px;">
  <div class="breadcome-list">
