<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="sparkline13-list">
				<div class="sparkline13-hd">
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
						data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="false" data-toolbar="#toolbar">
						<thead>
							<tr>
								<th data-field="state" data-checkbox="true"></th>
								<th>No</th>
								<th>Nama Donatur</th>
								<th>Donasi</th>
								<th>Nominal</th>
								<th>Bukti Pembayaran</th>
								<th>Status Pembayaran</th>
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
									<td><?php echo $row['nama_donatur'] ?></td>
									<td><?php echo $row['judul_donasi'] ?></td>
									<td><?php echo rupiah($row['nominal']) ?></td>
									<td>
										<?php
										if ($row['bukti_pembayaran'] == "0") {
											echo "Belum Upload Bukti";
										} else {
											?>
											<a href="<?= base_url('assets/bukti_transaksi/') . $row['bukti_pembayaran']; ?>" target="_blank"><img id="myImg" src="<?= base_url('assets/bukti_transaksi/') . $row['bukti_pembayaran']; ?>" alt="<?php echo $row['judul_donasi'] ?>" style="width:100%;max-width:300px;max-height:150px"></a></td>
										<?php } ?>
										<td>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $row['id_transaksi']; ?>">
												<?php if ($row['status_pembayaran'] == 0){ ?>
													Belum Upload Bukti Pembayaran
												<?php } elseif ($row['status_pembayaran'] == 1) {?>
													Sudah Dibayarkan
												<?php } else { ?>
													Menunggu Konfirmasi Pembayaran
												<?php } ?>
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal<?php echo $row['id_transaksi']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Status Pembayaran</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<?php echo form_open_multipart('Transaksi/ubahstatus/') ?>
															<input type="hidden" name="id_transaksi" value="<?php echo $row['id_transaksi']; ?>">
															<label for="select">Status Pembayaran</label>
															<select class="form-control" name="status_pembayaran" id="select">
																<option value="1" <?=$row['status_pembayaran'] == '1' ? 'selected' : null?>>Sudah Dibayarkan</option>
																<option value="2" <?=$row['status_pembayaran'] == '2' ? 'selected' : null?>>Menunggu Konfirmasi Pembayaran</option>
																<option value="0" <?=$row['status_pembayaran'] == '0' ? 'selected' : null?>>Belum Upload Bukti Pembayaran</option>
																<option value="3" <?=$row['status_pembayaran'] == '0' ? 'selected' : null?>>Bukti Pembayaran Tidak Bisa Terbaca, Silahkan Upload Ulang</option>
															</select>
															<div class="text-right" style="padding-top:10px">
																<button type="submit" name="Ubah" class="btn btn-primary">Save changes</button>
																<?php echo form_close(); ?>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
										</td>
										<td>
											<div class="hidden-sm hidden-xs btn-group">
												<a href="<?php echo site_url('transaksi/delete/' . $row['id_transaksi']) ?>" class="btn btn-xs btn-danger" title="Delete" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['judul_donasi']; ?>')"> <i class="fa fa-trash-o"></i> Hapus</a>
											</div>
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
<script>
	$('a.someclass').click(function(e) {
		// Special stuff to do when this link is clicked...

		// Cancel the default action
		e.preventDefault();
	});
</script>
