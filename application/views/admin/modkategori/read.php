<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
				<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="sparkline13-list">
										<div class="sparkline13-hd">
											<div class="login-social-inner">
												<a href="<?php echo site_url('kategori/create'); ?>" class="button btn-social basic-ele-mg-b-10 facebook span-left"> <span><i class="fa fa-plus-circle"></i></span> Tambah </a>
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
                              					<th>Kategori</th>
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
                          						<td><?php echo $row['nama_kategori'] ?></td>
                          						<td>
                          							<div class="hidden-sm hidden-xs btn-group">
                          								<a href="<?php echo site_url('kategori/edit/' . $row['id_kategori']) ?>" class="btn btn-info" title="ubah">Ubah</a>
                          								<a href="<?php echo site_url('kategori/delete/' . $row['id_kategori']) ?>" class="btn btn-danger" title="Delete" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['nama_kategori']; ?>')">Hapus
                          								</a>
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
