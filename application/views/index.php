<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
	</div>

	<!-- Content Row -->
	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div
								class="text-xs font-weight-bold text-primary text-uppercase mb-1"
							>
								Pendapatan Bulan Ini
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php
							if($pendapatan1 == null) {
								$pendapatan1 = 0;
							}else{
								$pendapatan1 = $pendapatan1->kredit;
							}
							if($pendapatan2 == null) {
								$pendapatan2 = 0;
							}else{
								$pendapatan2 = $pendapatan2->kredit;
							}
							if($pendapatan3 == null) {
								$pendapatan3 = 0;
							}else{
								$pendapatan3 = $pu3->kredit;
							}
							if($pendapatan4 == null) {
								$pendapatan4 = 0;
							}else{
								$pendapatan4 = $pendapatan4->kredit;
							}
							if($pendapatan5 == null) {
								$pendapatan5 = 0;
							}else{
								$pendapatan5 = $pendapatan5->kredit;
							}
							if($pendapatan6 == null) {
								$pendapatan6 = 0;
							}else{
								$pendapatan6 = $pendapatan6->kredit;
							}

							echo rupiah($pendapatan1 + $pendapatan2 + $pendapatan3 + $pendapatan5 + $pendapatan4 + $pendapatan6);
							?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div
								class="text-xs font-weight-bold text-success text-uppercase mb-1"
							>
								Total Hutang Bulan Ini
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php
							if($hutang_pajak == null) {
								$hutang_pajak = 0;
							}else{
								$hutang_pajak = $hutang_pajak->kredit;
							}
							if($hutang_dansos == null) {
								$hutang_dansos = 0;
							}else{
								$hutang_dansos = $hutang_dansos->kredit;
							}
							if($hutang_sejahtera == null) {
								$hutang_sejahtera = 0;
							}else{
								$hutang_sejahtera = $hutang_sejahtera->kredit;
							}
							if($hutang_pajda == null) {
								$hutang_pajda = 0;
							}else{
								$hutang_pajda = $hutang_pajda->kredit;
							}
							if($hutang_pendidikan == null) {
								$hutang_pendidikan = 0;
							}else{
								$hutang_pendidikan = $hutang_pendidikan->kredit;
							}
							if($hutang_bagi == null) {
								$hutang_bagi = 0;
							}else{
								$hutang_bagi = $hutang_bagi->kredit;
							}
							if($hutang_pengawas == null) {
								$hutang_pengawas = 0;
							}else{
								$hutang_pengawas = $hutang_pengawas->kredit;
							}
							if($hutang_pembangunan == null) {
								$hutang_pembangunan = 0;
							}else{
								$hutang_pembangunan = $hutang_pembangunan->kredit;
							}

							echo rupiah($hutang_bagi + $hutang_dansos + $hutang_pajak + $hutang_pajda + $hutang_pembangunan + $hutang_pembangunan + $hutang_pendidikan + $hutang_pengawas + $hutang_sejahtera);
							?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Pending Requests Card Example -->
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div
								class="text-xs font-weight-bold text-warning text-uppercase mb-1"
							>
								Total Piutang Bulan Ini
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php
							if($piutang_usaha == null) {
								$piutang_usaha = 0;
							}else{
								$piutang_usaha = $piutang_usaha->debit;
							}
							if($piutang_barang == null) {
								$piutang_barang = 0;
							}else{
								$piutang_barang = $piutang_barang->debit;
							}
							if($piutang_pinjaman == null) {
								$piutang_pinjaman = 0;
							}else{
								$piutang_pinjaman = $piutang_pinjaman->debit;
							}
							echo rupiah($piutang_barang + $piutang_pinjaman + $piutang_usaha);
							
							?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-comments fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Row -->

	
</div>
<!-- /.container-fluid -->
