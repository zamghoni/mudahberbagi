<!-- page title -->
<div class="page-title-wrap">
    <div class="page-title-overlay"></div>
    <div class="page-title-info">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Register Page</li>
        </ol>
        <h1 class="page-title">Register Page</h1>
    </div>
</div>
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<!-- registar -->
<div class="registar-section pd-top-100 pd-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 contact-main">
                <h3 class="form-title">Registration form</h3>
                <form class="registar-form" action="<?php echo site_url('register/simpan'); ?>" method="POST">
                    <label for="name">Nama Lengkap</label>
                    <input id="name" class="input" name="nama_donatur" type="text" required oninvalid="this.setCustomValidity('Masukkan Nama Lengkap Disini')" oninput="setCustomValidity('')" placeholder="Nama Lengkap" />
                    <label for="email">Email</label>
                    <input id="email" class="input" name="email_donatur" type="text" required oninvalid="this.setCustomValidity('Masukkan Email Disini')" oninput="setCustomValidity('')" placeholder="Email" />
                    <label for="no_hp">No HP</label>
                    <input class="input" name="hp_donatur" type="number" required oninvalid="this.setCustomValidity('Masukkan Nomor Telfon Disini')" oninput="setCustomValidity('')" placeholder="No HP" />
                    <label for="Password">Password</label>
                    <input id="Password" class="input" name="pswd_donatur" type="password" required oninvalid="this.setCustomValidity('Masukkan Password')" oninput="setCustomValidity('')" placeholder="Password" />
                    <div class="registar-check">

                    </div>
                    <input class="btn" type="submit" value="SUBMIT" />
                </form>
                <p class="rform-title">Sudah punya akun? <a href="<?php echo site_url('logindonatur'); ?>">Login</a> disini.</p>
            </div>
        </div>
    </div>
</div>
