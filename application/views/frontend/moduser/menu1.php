<!--================ End Header Menu Area =================-->
<div class="mb-4 margin1">
	<div class="container margin">
		<div class="row">
			<div class="col-md-3">
				<div class="card mb-3">
					<div class="card">
						<div class="card-header">
							Menu
						</div>
						<div class="list-group-flush">
							<a href="<?= site_url("user/profile") ?>">
								<li class="list-group-item">
									Profile
								</li>
							</a>
							<a href="<?= site_url("user/orders") ?>">
								<li class="list-group-item">
									Ubah Password
								</li>
							</a>
							<a href="<?= site_url("user/donasi") ?>">
								<li class="list-group-item">
									Transaksi Donasi Anda
								</li>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<div class="card">
									<div class="card-body text-center">
										<img src="<?= base_url() ?>/assets/img_donatur/<?= $data['img_donatur'] ?>" alt="" height="200" width="200">
									</div>
								</div>
							</div>
							<div class="col-md-8">
								<div class="card">
									<div class="card-body">
										Nama: <?= $data['nama_donatur'] ?>
										<br>E-Mail: <?= $data['email_donatur'] ?>
										<br>No Hp: <?= $data['hp_donatur'] ?>
										<p></p>
										<a href="<?php echo site_url('user/edit') ?>" class="btn btn-primary">Edit Profile</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
