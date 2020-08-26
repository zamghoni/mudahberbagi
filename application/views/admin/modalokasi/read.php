<div class="row">
	<?php
	$no = 1;
	foreach ($transaksi as $row) {
		?>
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="border:1px">
		<div class="analytics-sparkle-line reso-mg-b-30">
			<div class="analytics-content">
				<h5><?=$row['judul_donasi']?></h5>
				<h2>Rp<span class="counter"><?=$row['total']?></span> <span class="tuition-fees">Terkumpul</span></h2>
				<span class="text-success"> <?php
				if ($row['total'] == null) {
					echo '0%;';
				} else {
					echo $row['total'] / $row['target_donasi'] * 100 . '%;';
				}
				?></span>
				<div class="progress m-b-0">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
				</div>
			</div>
		</div>
	</div>
	<?php
	$no++;
	}
	?>
</div>
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="sparkline13-list">
				<div class="sparkline13-hd">
					<div class="login-social-inner">
						<a href="<?php echo site_url('alokasi/form'); ?>" class="button btn-social basic-ele-mg-b-10 facebook span-left"> <span><i class="fa fa-plus-circle"></i></span> Tambah </a>
					</div>
					<div class="main-sparkline13-hd">
						<h1><?php echo $judul ?></h1>
					</div>
				</div>
				<div class="sparkline13-graph">
					<div class="datatable-dashv1-list custom-datatable-overright">
						<div id="toolbar">
							<select class="form-control dt-tb">
								<option value="">Export Basic</option>
								<option value="all">Export All</option>
								<option value="selected">Export Selected</option>
							</select>
						</div>
						<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
						data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
						<thead>
							<tr>
								<th data-field="state" data-checkbox="true"></th>
								<th>No</th>
								<th>Donasi</th>
								<th>Nama Penerima</th>
								<th>Alamat Penerima</th>
								<th>Keterangan Alokasi</th>
								<th>Dokumentasi</th>
								<th>Total Alokasi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($data->result_array() as $row) {
								?>
								<tr>
									<td></td>
									<td><?php echo $no; ?></td>
									<td><?php echo $row['judul_donasi'] ?></td>
									<td><?php echo $row['nama_penerima'] ?></td>
									<td><?php echo $row['alamat_penerima'] ?></td>
									<td><?php echo $row['ket_alokasi'] ?></td>
									<td>
										<?php if ($row['dokumentasi'] != null){ ?>
											<img src="<?=base_url('')?>assets/dokumentasi/<?=$row['dokumentasi']?>" alt="Img Dokumentasi" style="height:80px">
										<?php }else{ ?>
											<span class="badge badge-danger">No Image</span>
										<?php } ?>
									</td>
									<td><?php echo rupiah($row['total_alokasi']) ?></td>
									<td>
										<a href="<?php echo site_url('alokasi/edit/' . $row['id_alokasi']) ?>" title="Ubah" class="btn btn-xs btn-success"><i class="ace-icon fa fa-pencil"></i> Edit</a>
										<a href="<?php echo site_url('alokasi/delete/' . $row['id_alokasi']) ?>" title="Delete" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['nama_penerima']; ?>')" class="btn btn-xs btn-danger"><i class="ace-icon fa fa-trash-o"></i> Hapus</a>
									</td>
								</tr>
								<?php
								$no++;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- Static Table End -->
