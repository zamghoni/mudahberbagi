<div class="margin1">
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li aria-current="page" class="breadcrumb-item active"><?= $sub; ?></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <!--
              *** CUSTOMER MENU ***
              _________________________________________________________
              -->
                        <div class="card sidebar-menu">
                            <div class="card-header">
                                <h3 class="h4 card-title">Customer section</h3>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills flex-column">
                                    <a href="<?php echo site_url('user/profile'); ?>" class="nav-link 
                                    <?php
                                    if ($this->uri->segment(2) == 'profile') {
                                        echo 'active';
                                    } elseif ($this->uri->segment(2) == 'edit') {
                                        echo 'active';
                                    }
                                    ?>"><i class="fa fa-user"></i> My Account</a>
                                    <a href="<?php echo site_url('user/donasi'); ?>" class="nav-link 
                                    <?php
                                    if ($this->uri->segment(2) == 'donasi') {
                                        echo 'active';
                                    }
                                    ?>"><i class="fa fa-list"></i> My Donation</a>
                                    <a href="<?php echo site_url('user/changePassword'); ?>" class="nav-link 
                                    <?php
                                    if ($this->uri->segment(2) == 'changePassword') {
                                        echo 'active';
                                    }
                                    ?>"><i class="fa fa-lock"></i> Change Password</a>
                                    <a href="<?php echo site_url('logindonatur/logout'); ?>" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></ul>
                            </div>
                        </div>
                        <!-- /.col-lg-3-->
                        <!-- *** CUSTOMER MENU END ***-->
                    </div>