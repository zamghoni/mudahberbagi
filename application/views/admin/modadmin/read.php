<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="sparkline13-list">
				<div class="sparkline13-hd">
					<div class="login-social-inner">
						<a href="<?php echo site_url('admin/create'); ?>" class="button btn-social basic-ele-mg-b-10 facebook span-left"> <span><i class="fa fa-plus-circle"></i></span> Tambah </a>
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
								<th>Kode</th>
								<th>Nama</th>
								<th>HP</th>
								<th>Email</th>
								<th>Foto</th>
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
									<td><?php echo $row['kd_admin'] ?></td>
									<td><?php echo $row['nama_admin'] ?></td>
									<td><?php echo $row['hp_admin'] ?></td>
									<td><?php echo $row['email_admin'] ?></td>
									<td>
											<img src="<?=base_url('')?>assets/img_admin/<?=$row['img_admin']?>" alt="Img Admin" style="height:50px">									
									</td>
									<td>
										<a href="<?php echo site_url('admin/edit/' . $row['kd_admin']) ?>" type="button" class="btn btn-custon-four btn-success btn-xs"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i> Edit</a>
										<a href="<?php echo site_url('admin/delete/' . $row['kd_admin']) ?>" type="button" class="btn btn-custon-four btn-danger btn-xs" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['kd_admin']; ?>')"><i class="fa fa-trash-o" aria-hidden="true" title="Hapus"></i> Hapus</a>
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
