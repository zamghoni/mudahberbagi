   <!-- Page title -->
   <div class="page-title-wrap">
   	<div class="page-title-overlay"></div>
   	<div class="page-title-info">
   		<ol class="breadcrumb">
   			<li><a href="#">Home</a></li>
   			<li class="active"><?= $transaksi['judul_donasi']; ?></li>
   		</ol>
   		<h1 class="page-title"><?= $transaksi['judul_donasi']; ?></h1>
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

   <!-- Donation Section -->
   <div class="donation-section pd-top-100 pd-bottom-50">
   	<div class="container">
   		<div class="row">
   			<div class="col-md-6 mg-bottom-50" style="float: none; margin: 0 auto;">
   				<div class="billing-address">
   					<h3 class="address-header">Instruksi Pembayaran</h3>
   					<form id="contact-form" class="contact-address" action="#" method="POST">
   						<p class="address-title">Transfer sesuai nominal di bawah ini:</p>
   						<div class="input-group">
   							<span class="input-group-addon" id="basic-addon1">Rp</span>
   							<input type="number" class="input" placeholder="Nominal" value="<?= $transaksi['nominal']; ?>" readonly>
   						</div>
   						<p class="address-title">Pembayaran dilakukan ke rekening a/n</p>
   						<?php
							if ($transaksi['id_bank'] == "1") {
							?>
   							<p class="address-title">KSPPS BMT BUM Tegal</p>

   							<div class="input-group">
   								<span class="input-group-addon">BNI</span>
   								<input type="text" class="form-control" value="0331725862" readonly>
   								<span class="input-group-addon"><span class="input-group-text text-primary font-weight-bold" onclick="myFunction()">Salin</span></span>
   							</div>
   						<?php } elseif ($transaksi['id_bank'] == "2") {
							?>
   							<h6 class="bold">Baitulmaal KSPPS BMT BUM Tegal</h6>
   							<br>
   							<div class="input-group">
   								<span class="input-group-addon" id="basic-addon1"><img src="https://upload.wikimedia.org/wikipedia/id/b/bc/Logo_BNI_Syariah.png" class="img-responsive" width="55" height="24" /></span>
   								<input type="text" class="form-control main-input text-center font-weight-bold" id="myInput" value="0331725862" readonly>
   							</div>
   						<?php } elseif ($transaksi['id_bank'] == "3") {
							?>
   							<h6 class="bold">KJKS Bina Umat Mandiri</h6>
   							<br>
   							<div class="input-group">
   								<div class="input-group-prepend">
   									<span class="input-group-text">
   										<img src="https://upload.wikimedia.org/wikipedia/id/thumb/2/29/Bank_Syariah_Mandiri_logo.svg/1024px-Bank_Syariah_Mandiri_logo.svg.png" class="img-responsive" width="55" height="24" />
   									</span>
   								</div>
   								<input type="text" class="form-control main-input text-center font-weight-bold" id="myInput" value="7112222116" readonly>
   								<div class="input-group-append">
   									<span class="input-group-text text-primary font-weight-bold" onclick="myFunction()">Salin</span>
   								</div>
   							</div>
   						<?php } elseif ($transaksi['id_bank'] == "4") {
							?>
   							<h6 class="bold">KSPPS BMT Bina Umat Mandiri</h6>
   							<br>
   							<div class="input-group">
   								<div class="input-group-prepend">
   									<span class="input-group-text">
   										<img src="https://upload.wikimedia.org/wikipedia/id/thumb/f/f6/Bank_Muamalat_logo_2012.svg/1280px-Bank_Muamalat_logo_2012.svg.png" class="img-responsive" width="55" height="24" />
   									</span>
   								</div>
   								<input type="text" class="form-control main-input text-center font-weight-bold" id="myInput" value="5120018987" readonly>
   								<div class="input-group-append">
   									<span class="input-group-text text-primary font-weight-bold" onclick="myFunction()">Salin</span>
   								</div>
   							</div>
   						<?php } ?>
   						<p></p>
   						Jika anda sudah melakukan transfer silahkan melakukan konfirmasi pembayaran dengan menyertakan bukti transfer.
   						<br>
   						Silahkan klik link dibawah ini
   						<br>
   						<a href="<?php echo site_url('user/uploadBukti/') . $this->uri->segment(3); ?>" class="btn btn-primary btn-block">Konfirmasi Pembayaran</a>
              <a href="<?php echo site_url('beranda'); ?>" class="btn btn-red btn-block">Kembali ke Beranda</a>
   					</form>
   				</div>
   			</div>
   		</div>
   	</div>
   </div>


   <script type="text/javascript" src="assets/css/bootstrap.min.js"></script>
   <script>
   	function myFunction() {
   		var copyText = document.getElementById("myInput");
   		copyText.select();
   		copyText.setSelectionRange(0, 99999)
   		document.execCommand("copy");
   	}
   </script>
