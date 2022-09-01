<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Laporan</h1>
	</div>

	<!-- Content Row -->

	<div class="row">
		<!-- Area Chart -->
		<div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div
					class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
				>
					<h6 class="m-0 font-weight-bold text-primary">Cetak Laporan</h6>
				</div>		
				<div class="card-body">
					<form method="post" action="<?php echo base_url(); ?>laporan/cetak">
						<div class="form-group">
							<label for="inputEmail4">Jenis Laporan</label>
							<input
								type="hidden"
								name="<?php echo $this->security->get_csrf_token_name(); ?>"
								value="<?php echo $this->security->get_csrf_hash(); ?>"
							/>

                            <select name="jenis" id="jenis" class="form-control" required>
                            <option value=""> Pilih Jenis Laporan </option>
                            <option value="Laba">Laporan Laba Rugi</option>
                            <option value="Neraca">Laporan Neraca</option>
                            </select>
							
						</div>
						<div class="form-group">
							<label for="inputEmail4">Bulan</label>
							<select name="bulan" id="bulan" class="form-control" required>
                            <option value=""> Pilih Bulan </option>
                            <?php 
                            $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                            foreach ($bulan as $bu) : ?>
                            <option value="<?php echo $bu ?>"> <?php echo $bu ?> </option>
                            <?php endforeach; ?>
                            </select>
						</div>
						<div class="form-group">
							<label for="inputEmail4">Tahun</label>
							<select name="tahun" id="tahun" class="form-control">
                                <option value=""> Pilih Tahun </option>
                                <?php 
                                    $now=date('Y');
                                    for ($a=2020;$a<=$now;$a++)
                                    {
                                        echo "<option value='$a'>$a</option>";
                                    }
                                    ?>
                                </select>
						</div>
						<div class="form-group">
							<input
								type="submit"
								name="preview"
								class="btn btn-primary"
								value="Print"
							/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
