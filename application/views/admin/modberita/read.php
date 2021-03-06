<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="sparkline13-list">
				<div class="sparkline13-hd">
					<div class="login-social-inner">
						<a href="<?php echo site_url('berita/create'); ?>" class="button btn-social basic-ele-mg-b-10 facebook span-left"> <span><i class="fa fa-plus-circle"></i></span> Tambah </a>
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
								<th>Judul</th>
								<th>Tanggal</th>
								<th>Kategori</th>
								<th>Gambar</th>
								<th>Status</th>
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
									<td><?php echo $row['judul_berita'] ?></td>
									<td><?php echo $row['tgl_berita'];
									echo ' ';
									echo $row['jam_berita'] ?></td>
									<td><?php echo $row['nama_kategori'] ?></td>
									<td>
										<?php if ($row['img_berita'] != null){ ?>
											<img src="<?=base_url('')?>assets/img_berita/<?=$row['img_berita']?>" alt="Img Berita" style="height:80px">
										<?php }else{ ?>
											<span class="badge badge-danger">No Image</span>
										<?php } ?>
									</td>
									<td>
										<?php
										if ($row['st_berita'] == 'Publik') {
											?>
											<a href="<?php echo site_url('berita/status/' . $row['id_berita']) . '/' . 'Blokir'; ?>" title="Ubah status ke Blok" class="btn btn-xs btn-warning"><i class="ace-icon fa fa-ban"></i> Blokir</a>
											<?php
										} elseif ($row['st_berita'] == 'Blokir') {
											?>
											<a href="<?php echo site_url('berita/status/' . $row['id_berita']) . '/' . 'Publik'; ?>" title="Ubah status ke Publik" class="btn btn-xs btn-info"><i class="ace-icon fa fa-paper-plane"></i> Publik</a>
											<?php
										}
										?>
									</td>
									<td>
										<a href="<?php echo site_url('berita/edit/' . $row['id_berita']) ?>" title="Ubah" class="btn btn-xs btn-success"><i class="ace-icon fa fa-pencil"></i> Edit</a>
										<a href="<?php echo site_url('berita/delete/' . $row['id_berita']) ?>" title="Delete" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['judul_berita']; ?>')" class="btn btn-xs btn-danger"><i class="ace-icon fa fa-trash-o"></i> Hapus</a>

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
