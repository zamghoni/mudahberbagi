<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="sparkline13-list">
				<div class="sparkline13-hd">
					<div class="login-social-inner">
						<div class="main-sparkline13-hd">
							<h1><?php echo $judul ?></h1>
							<br><p></p>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<!-- Table -->
							<form>
								<div class="row">
									<div class="col-md-1">
										Bulan
									</div>
									<div class="col-md-3">
										<select name="bulan" id="per_page" class="form-control">
											<option value="ALL" <?php if ($bulan == 'ALL') {
												echo 'selected';
											} ?>>Semua bulan</option>
											<option value="1" <?php if ($bulan == '1') {
												echo 'selected';
											} ?>>Januari</option>
											<option value="2" <?php if ($bulan == '2') {
												echo 'selected';
											} ?>>Februari</option>
											<option value="3" <?php if ($bulan == '3') {
												echo 'selected';
											} ?>>Maret</option>
											<option value="4" <?php if ($bulan == '4') {
												echo 'selected';
											} ?>>April</option>
											<option value="5" <?php if ($bulan == '5') {
												echo 'selected';
											} ?>>Mei</option>
											<option value="6" <?php if ($bulan == '6') {
												echo 'selected';
											} ?>>Juni</option>
											<option value="7" <?php if ($bulan == '7') {
												echo 'selected';
											} ?>>Juli</option>
											<option value="8" <?php if ($bulan == '8') {
												echo 'selected';
											} ?>>Agustus</option>
											<option value="9" <?php if ($bulan == '9') {
												echo 'selected';
											} ?>>September</option>
											<option value="10" <?php if ($bulan == '10') {
												echo 'selected';
											} ?>>Oktober</option>
											<option value="11" <?php if ($bulan == '11') {
												echo 'selected';
											} ?>>November</option>
											<option value="12" <?php if ($bulan == '12') {
												echo 'selected';
											} ?>>Desember</option>
										</select>
									</div>
									<div class="col-md-1">
										Tahun
									</div>
									<div class="col-md-3">
										<select name="tahun" id="per_page" class="form-control">
											<option value="ALL" <?php if ($tahun == 'ALL') {
												echo 'selected';
											} ?>>Semua Tahun</option>
											<option value="2019" <?php if ($tahun == '2019') {
												echo 'selected';
											} ?>>2019</option>
											<option value="2020" <?php if ($tahun == '2020') {
												echo 'selected';
											} ?>>2020</option>
											<option value="2021" <?php if ($tahun == '2021') {
												echo 'selected';
											} ?>>2021</option>
											<option value="2022" <?php if ($tahun == '2022') {
												echo 'selected';
											} ?>>2022</option>
										</select>
									</div>
									<div class="col-md-3">
										<button type="submit" class="btn btn-primary">Submit</button>
										<br><p></p>
									</div>
								</div>
							</form>
						</div>
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
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($data as $row) {
								?>
								<tr>
									<td></td>
									<td><?php echo $no; ?></td>
									<td><?php echo $row['judul_donasi'] ?></td>
									<td><?php echo rupiah($row['total']) ?></td>
								</tr>
								<?php
								$no++;
							}
							?>
						</tbody>
						<tfoot class="bg-primary">
							<tr>
								<th data-field="state" data-checkbox="true"></th>
								<th></th>
								<th class="text-center">Total Donasi</th>
								<th><?php
									$total = 0;
									foreach ($data as $row) {
										$total = $row['total'] + $total;
									}
									echo rupiah($total);
									?></th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Static Table End -->
