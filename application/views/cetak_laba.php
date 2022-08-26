<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title  ?></title>
	<style type="text/css">
		body{
			font-family: Arial;
			color: black;
		}
	</style>
</html>
<body>

	<center>
		<h1 style="font-weight: bold;">KOPERASI JASA SYARIAH ISLAMIC CENTRE BEKASI</h1>
		<h2 style="font-weight: bold;">LAPORAN LABA/RUGI</h2>
        <h3 style="font-weight: bold;">per <?php echo $bulan.' '.$tahun; ?> </h3>
	</center>



	
	<table class="table  table-bordered mt-3">
		<tr>
			<h6 style="font-weight: bold ;">Pendapatan & Pendapatan Usaha Lain - Lain</h6>
            <th class="text-center">Jenis Akun</th>
            <th class="text-center">Jumlah</th>
		</tr>
		<tr class="text-center" <?php if($pendapatan1 == null) { echo 'hidden';} ?>>
			<td><?php echo $pendapatan1->nama_akun?></td>
			<td><?php echo rupiah($pendapatan1->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pendapatan2 == null) { echo 'hidden';} ?>>
			<td><?php echo $pendapatan2->nama_akun?></td>
			<td><?php echo rupiah($pendapatan2->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pendapatan3 == null) { echo 'hidden';} ?>>
			<td><?php echo $pendapatan3->nama_akun?></td>
			<td><?php echo rupiah($pendapatan3->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pendapatan4 == null) { echo 'hidden';} ?>>
			<td><?php echo $pendapatan4->nama_akun?></td>
			<td><?php echo rupiah($pendapatan4->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pendapatan5 == null) { echo 'hidden';} ?>>
			<td><?php echo $pendapatan5->nama_akun?></td>
			<td><?php echo rupiah($pendapatan5->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pendapatan6 == null) { echo 'hidden';} ?>>
			<td><?php echo $pendapatan6->nama_akun?></td>
			<td><?php echo rupiah($pendapatan6->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pu1 == null) { echo 'hidden';} ?>>
			<td><?php echo $pu1->nama_akun?></td>
			<td><?php echo rupiah($pu1->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pu2 == null) { echo 'hidden';} ?>>
			<td><?php echo $pu2->nama_akun?></td>
			<td><?php echo rupiah($pu2->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pu3 == null) { echo 'hidden';} ?>>
			<td><?php echo $pu3->nama_akun?></td>
			<td><?php echo rupiah($pu3->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pu4 == null) { echo 'hidden';} ?>>
			<td><?php echo $pu4->nama_akun?></td>
			<td><?php echo rupiah($pu4->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pu5 == null) { echo 'hidden';} ?>>
			<td><?php echo $pu5->nama_akun?></td>
			<td><?php echo rupiah($pu5->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pu6 == null) { echo 'hidden';} ?>>
			<td><?php echo $pu6->nama_akun?></td>
			<td><?php echo rupiah($pu6->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pu7 == null) { echo 'hidden';} ?>>
			<td><?php echo $pu7->nama_akun?></td>
			<td><?php echo rupiah($pu7->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pu8 == null) { echo 'hidden';} ?>>
			<td><?php echo $pu8->nama_akun?></td>
			<td><?php echo rupiah($pu8->debit) ?></td>
		</tr>
		<tr class="text-center">
			<td style="font-weight: bold ;">Total</td>
			<td><?php
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
				if($pu1 == null) {
					$pu1 = 0;
				}else{
					$pu1 = $pu1->debit;
				}
				if($pu2 == null) {
					$pu2 = 0;
				}else{
					$pu2 = $pu2->debit;
				}
				if($pu3 == null) {
					$pu3 = 0;
				}else{
					$pu3 = $pu3->debit;
				}
				if($pu4 == null) {
					$pu4 = 0;
				}else{
					$pu4 = $pu4->debit;
				}
				if($pu5 == null) {
					$pu5 = 0;
				}else{
					$pu5 = $pu5->debit;
				}
				if($pu6 == null) {
					$pu6 = 0;
				}else{
					$pu6 = $pu6->debit;
				}
				if($pu7 == null) {
					$pu7 = 0;
				}else{
					$pu7 = $pu7->debit;
				}
				if($pu8 == null) {
					$pu8 = 0;
				}else{
					$pu8 = $pu8->debit;
				}

				$total_pendapatan = $pendapatan1 + $pendapatan2 + $pendapatan3 + $pendapatan4 + $pendapatan5 + $pendapatan6 + $pu1 + $pu2 + $pu3 + $pu4 + $pu5 + $pu6 + $pu7 + $pu8;
				echo rupiah($pendapatan1 + $pendapatan2 + $pendapatan3 + $pendapatan4 + $pendapatan5 + $pendapatan6 + $pu1 + $pu2 + $pu3 + $pu4 + $pu5 + $pu6 + $pu7 + $pu8) ?></td>
		</tr>
	</table>

	<table class="table  table-bordered mt-3">
		<tr>
			<h6 style="font-weight: bold ;">Biaya & Insentive</h6>
            <th class="text-center">Jenis Akun</th>
            <th class="text-center">Jumlah</th>
		</tr>
		<tr class="text-center" <?php if($biaya_gaji == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_gaji->nama_akun?></td>
			<td><?php echo rupiah($biaya_gaji->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($insentive1 == null) { echo 'hidden';} ?>>
			<td><?php echo $insentive1->nama_akun?></td>
			<td><?php echo rupiah($insentive1->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($insentive2 == null) { echo 'hidden';} ?>>
			<td><?php echo $insentive2->nama_akun?></td>
			<td><?php echo rupiah($insentive2->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_lebaran == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_lebaran->nama_akun?></td>
			<td><?php echo rupiah($biaya_lebaran->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_utility == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_utility->nama_akun?></td>
			<td><?php echo rupiah($biaya_utility->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_kerjasama == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_kerjasama->nama_akun?></td>
			<td><?php echo rupiah($biaya_kerjasama->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_perlengkapan1 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_perlengkapan1->nama_akun?></td>
			<td><?php echo rupiah($biaya_perlengkapan1->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_perlengkapan2 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_perlengkapan2->nama_akun?></td>
			<td><?php echo rupiah($biaya_perlengkapan2->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_perlengkapan3 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_perlengkapan3->nama_akun?></td>
			<td><?php echo rupiah($biaya_perlengkapan3->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_perlengkapan4 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_perlengkapan4->nama_akun?></td>
			<td><?php echo rupiah($biaya_perlengkapan4->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_penyusutan1 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_penyusutan1->nama_akun?></td>
			<td><?php echo rupiah($biaya_penyusutan1->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_penyusutan2 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_penyusutan2->nama_akun?></td>
			<td><?php echo rupiah($biaya_penyusutan2->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($penyusutan_gedung == null) { echo 'hidden';} ?>>
			<td><?php echo $penyusutan_gedung->nama_akun?></td>
			<td><?php echo rupiah($penyusutan_gedung->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($pajak == null) { echo 'hidden';} ?>>
			<td><?php echo $pajak->nama_akun?></td>
			<td><?php echo rupiah($pajak->debit) ?></td>
		</tr>

		<tr class="text-center" <?php if($pajak == null) { echo 'hidden';} ?>>
			<td><?php echo $pajak->nama_akun?></td>
			<td><?php echo rupiah($pajak->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_pemakaian1 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_pemakaian1->nama_akun?></td>
			<td><?php echo rupiah($biaya_pemakaian1->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_pemakaian2 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_pemakaian2->nama_akun?></td>
			<td><?php echo rupiah($biaya_pemakaian2->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_perawatan1 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_perawatan1->nama_akun?></td>
			<td><?php echo rupiah($biaya_perawatan1->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_perawatan2 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_perawatan2->nama_akun?></td>
			<td><?php echo rupiah($biaya_perawatan2->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_perawatan3 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_perawatan3->nama_akun?></td>
			<td><?php echo rupiah($biaya_perawatan3->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_umum1 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_umum1->nama_akun?></td>
			<td><?php echo rupiah($biaya_umum1->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_umum2 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_umum2->nama_akun?></td>
			<td><?php echo rupiah($biaya_umum2->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_umum3 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_umum3->nama_akun?></td>
			<td><?php echo rupiah($biaya_umum3->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_umum4 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_umum4->nama_akun?></td>
			<td><?php echo rupiah($biaya_umum4->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_umum5 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_umum5->nama_akun?></td>
			<td><?php echo rupiah($biaya_umum5->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($biaya_umum6 == null) { echo 'hidden';} ?>>
			<td><?php echo $biaya_umum6->nama_akun?></td>
			<td><?php echo rupiah($biaya_umum6->debit) ?></td>
		</tr>
		
		<tr class="text-center">
			<td style="font-weight: bold ;">Jumlah Biaya Operasi</td>
			<td><?php
				if($biaya_gaji == null) {
					$biaya_gaji = 0;
				}else{
					$biaya_gaji = $biaya_gaji->debit;
				}
				if($insentive1 == null) {
					$insentive1 = 0;
				}else{
					$insentive1 = $insentive1->debit;
				}
				if($insentive2 == null) {
					$insentive2 = 0;
				}else{
					$insentive2 = $insentive2->debit;
				}
				if($biaya_lebaran == null) {
					$biaya_lebaran = 0;
				}else{
					$biaya_lebaran = $biaya_lebaran->debit;
				}
				if($biaya_kerjasama == null) {
					$biaya_kerjasama = 0;
				}else{
					$biaya_kerjasama = $biaya_kerjasama->debit;
				}
				if($biaya_perlengkapan1 == null) {
					$biaya_perlengkapan1 = 0;
				}else{
					$biaya_perlengkapan1 = $biaya_perlengkapan1->debit;
				}
				if($biaya_perlengkapan2 == null) {
					$biaya_perlengkapan2 = 0;
				}else{
					$biaya_perlengkapan2 = $biaya_perlengkapan2->debit;
				}
				if($biaya_perlengkapan3 == null) {
					$biaya_perlengkapan3 = 0;
				}else{
					$biaya_perlengkapan3 = $biaya_perlengkapan3->debit;
				}
				if($biaya_perlengkapan4 == null) {
					$biaya_perlengkapan4 = 0;
				}else{
					$biaya_perlengkapan4 = $biaya_perlengkapan4->debit;
				}
				if($biaya_utility == null) {
					$biaya_utility = 0;
				}else{
					$biaya_utility = $biaya_utility->debit;
				}
				if($biaya_penyusutan1 == null) {
					$biaya_penyusutan1 = 0;
				}else{
					$biaya_penyusutan1 = $biaya_penyusutan1->debit;
				}
				if($biaya_penyusutan2 == null) {
					$biaya_penyusutan2 = 0;
				}else{
					$biaya_penyusutan2 = $biaya_penyusutan2->debit;
				}
				if($penyusutan_gedung == null) {
					$penyusutan_gedung = 0;
				}else{
					$penyusutan_gedung = $penyusutan_gedung->debit;
				}
				if($pajak == null) {
					$pajak = 0;
				}else{
					$pajak = $pajak->debit;
				}
				if($biaya_pemakaian1 == null) {
					$biaya_pemakaian1 = 0;
				}else{
					$biaya_pemakaian1 = $biaya_pemakaian1->debit;
				}
				if($biaya_pemakaian2 == null) {
					$biaya_pemakaian2 = 0;
				}else{
					$biaya_pemakaian2 = $biaya_pemakaian2->debit;
				}
				if($biaya_perawatan1 == null) {
					$biaya_perawatan1 = 0;
				}else{
					$biaya_perawatan1 = $biaya_perawatan1->debit;
				}
				if($biaya_perawatan2 == null) {
					$biaya_perawatan2 = 0;
				}else{
					$biaya_perawatan2 = $biaya_perawatan2->debit;
				}
				if($biaya_perawatan3 == null) {
					$biaya_perawatan3 = 0;
				}else{
					$biaya_perawatan3 = $biaya_perawatan3->debit;
				}
				if($biaya_umum1 == null) {
					$biaya_umum1 = 0;
				}else{
					$biaya_umum1 = $biaya_umum1->debit;
				}
				if($biaya_umum2 == null) {
					$biaya_umum2 = 0;
				}else{
					$biaya_umum2 = $biaya_umum2->debit;
				}
				if($biaya_umum3 == null) {
					$biaya_umum3 = 0;
				}else{
					$biaya_umum3 = $biaya_umum3->debit;
				}
				if($biaya_umum4 == null) {
					$biaya_umum4 = 0;
				}else{
					$biaya_umum4 = $biaya_umum4->debit;
				}
				if($biaya_umum5 == null) {
					$biaya_umum5 = 0;
				}else{
					$biaya_umum5 = $biaya_umum5->debit;
				}
				if($biaya_umum6 == null) {
					$biaya_umum6 = 0;
				}else{
					$biaya_umum6 = $biaya_umum6->debit;
				}
				$total_biaya = $biaya_gaji + $insentive1 + $insentive2 + $biaya_lebaran + $biaya_kerjasama + $biaya_perlengkapan1 + $biaya_perlengkapan2 + $biaya_perlengkapan3 + $biaya_perlengkapan4 + $biaya_utility + $biaya_penyusutan1 + $biaya_penyusutan2 + $penyusutan_gedung + $pajak + $biaya_pemakaian1 + $biaya_pemakaian2 + $biaya_perawatan1 + $biaya_perawatan2 + $biaya_perawatan3 + $biaya_umum1 + $biaya_umum2 + $biaya_umum3 + $biaya_umum4 + $biaya_umum5 + $biaya_umum6;
				echo rupiah($biaya_gaji + $insentive1 + $insentive2 + $biaya_lebaran + $biaya_kerjasama + $biaya_perlengkapan1 + $biaya_perlengkapan2 + $biaya_perlengkapan3 + $biaya_perlengkapan4 + $biaya_utility + $biaya_penyusutan1 + $biaya_penyusutan2 + $penyusutan_gedung + $pajak + $biaya_pemakaian1 + $biaya_pemakaian2 + $biaya_perawatan1 + $biaya_perawatan2 + $biaya_perawatan3 + $biaya_umum1 + $biaya_umum2 + $biaya_umum3 + $biaya_umum4 + $biaya_umum5 + $biaya_umum6) ?></td>
		</tr>

		<tr class="text-center">
			<td style="font-weight: bold;">Pendapatan Operasi (Total Pendapatan - Total Biaya) </td>
			<td><?php echo rupiah($total_pendapatan - $total_biaya)  ?></td>	
		</tr>
	</table>

	<table class="table  table-bordered mt-3">
		<tr>
			<h6 style="font-weight: bold ;"> Laba Setelah Pajak </h6>
			<th class="text-center">Jenis Akun</th>
			<th class="text-center">Jumlah</th>
		</tr>

		<tr class="text-center">
			<td><?php echo $pajak_final->nama_akun ?></td>
			<td><?php echo rupiah($pajak_final->debit) ?></td>
		</tr>

		<tr class="text-center">
			<td style="font-weight: bold ;">Total Laba</td>
			<td><?php
				$total_laba = ($total_pendapatan - $total_biaya) - $pajak_final->debit;
				echo rupiah(($total_pendapatan - $total_biaya) - $pajak_final->debit) ?></td>
		</tr>
	</table>

	<table class="table  table-bordered mt-3">
		<tr>
			<h6 style="font-weight: bold ;"> Laba Bersih </h6>
			<th class="text-center">Jenis Akun</th>
			<th class="text-center">Jumlah</th>
		</tr>

		<tr class="text-center">
			<td><?php echo $pendapat_lain->nama_akun ?></td>
			<td><?php echo rupiah($pendapat_lain->kredit) ?></td>
		</tr>
		<tr class="text-center">
			<td><?php echo $biaya_adm->nama_akun ?></td>
			<td><?php echo rupiah($biaya_adm->debit) ?></td>
		</tr>

		<tr class="text-center">
			<td style="font-weight: bold ;">Total Laba Bersih</td>
			<td><?php echo rupiah($total_laba - $pendapat_lain->kredit - $biaya_adm->debit) ?></td>
		</tr>
	</table>






</body>

<script type="text/javascript">
	window.print();
</script>

</html>