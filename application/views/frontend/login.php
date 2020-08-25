    <!-- page title -->
    <div class="page-title-wrap">
        <div class="page-title-overlay"></div>
        <div class="page-title-info">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Login</li>
            </ol>
            <h1 class="page-title">Login Page</h1>
        </div>
    </div>


    <!-- registar -->
    <div class="registar-section pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 contact-main">
                    <h3 class="form-title">Login form</h3>
                    <form class="registar-form" action="<?php echo site_url('logindonatur/login'); ?>" method="POST">
                        <label for="email">Email address</label>
                        <input id="email" name="email_donatur" class="input" type="text" required oninvalid="this.setCustomValidity('Masukkan Email Address Disini')" oninput="setCustomValidity('')" placeholder="User name" />
                        <label for="Password">Password</label>
                        <input id="Password" name="pswd_donatur" class="input" type="password" required oninvalid="this.setCustomValidity('Masukkan password disini')" oninput="setCustomValidity('')" placeholder="Password" />
                        <p></p>
                        <input class="btn" type="submit" value="LOGIN" />
                    </form>
                    <p class="rform-title">You are not a member! <a href="<?php echo site_url('register'); ?>">Register</a> here.</p>
                </div>
            </div>
        </div>
    </div>
