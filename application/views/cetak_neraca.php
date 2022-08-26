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
		<h2 style="font-weight: bold;">LAPORAN NERACA</h2>
        <h3 style="font-weight: bold;">per <?php echo $bulan.' '.$tahun; ?> </h3>
	</center>



	
	<table class="table  table-bordered mt-3">
		<tr>
			<h6 style="font-weight: bold ;">Aktiva</h6>
			<h6 style="font-weight: bold ;">Aset Lancar</h6>
            <th class="text-center">Jenis Akun</th>
            <th class="text-center">Jumlah</th>
		</tr>
		<tr class="text-center" <?php if($kas1 == null && $kas2 == null && $kas3 == null && $kas4 == null) { echo 'hidden';} ?>>
			<td>Kas dan Setara Kas</td>
			<td><?php
            $kas = $kas1->debit + $kas2->debit + $kas3->debit + $kas4->debit;
            echo rupiah($kas) ?></td>
		</tr>
		<tr class="text-center" <?php if($piutang_usaha == null) { echo 'hidden';} ?>>
			<td><?php echo $piutang_usaha->nama_akun?></td>
			<td><?php echo rupiah($piutang_usaha->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($piutang_barang == null) { echo 'hidden';} ?>>
			<td><?php echo $piutang_barang->nama_akun?></td>
			<td><?php echo rupiah($piutang_barang->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($piutang_pinjaman == null) { echo 'hidden';} ?>>
			<td><?php echo $piutang_pinjaman->nama_akun?></td>
			<td><?php echo rupiah($piutang_pinjaman->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($invest_sapi == null) { echo 'hidden';} ?>>
			<td><?php echo $invest_sapi->nama_akun?></td>
			<td><?php echo rupiah($invest_sapi->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($dp == null) { echo 'hidden';} ?>>
			<td><?php echo $dp->nama_akun?></td>
			<td><?php echo rupiah($dp->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($persediaan_barang == null) { echo 'hidden';} ?>>
			<td><?php echo $persediaan_barang->nama_akun?></td>
			<td><?php echo rupiah($persediaan_barang->debit) ?></td>
		</tr>
		<tr class="text-center">
			<td style="font-weight: bold ;">Jumlah Aset Lancar</td>
			<td><?php
				if($kas1 == null) {
					$kas1 = 0;
				}else{
					$kas1 = $pendapatan1->debit;
				}
				if($kas2 == null) {
					$kas2 = 0;
				}else{
					$kas2 = $kas2->debit;
				}
				if($kas3 == null) {
					$kas3 = 0;
				}else{
					$kas3 = $kas3->debit;
				}
				if($kas4 == null) {
					$kas4 = 0;
				}else{
					$kas4 = $kas4->debit;
				}
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
				if($invest_sapi == null) {
					$invest_sapi = 0;
				}else{
					$invest_sapi = $invest_sapi->debit;
				}
				if($dp == null) {
					$dp = 0;
				}else{
					$dp = $dp->debit;
				}
				if($persediaan_barang == null) {
					$persediaan_barang = 0;
				}else{
					$persediaan_barang = $persediaan_barang->debit;
				}

				$total_aset_lancar = $kas1 + $kas2 + $kas3 + $kas4 + $piutang_usaha + $piutang_barang + $piutang_pinjaman + $invest_sapi + $dp + $persediaan_barang;
				echo rupiah($total_aset_lancar) ?></td>
		</tr>
	</table>

    <table class="table  table-bordered mt-3">
		<tr>
			<h6 style="font-weight: bold ;">Aset Tidak Lancar</h6>
            <th class="text-center">Jenis Akun</th>
            <th class="text-center">Jumlah</th>
		</tr>
		<tr class="text-center" <?php if($invest == null) { echo 'hidden';} ?>>
			<td><?php echo $invest->nama_akun ?></td>
			<td><?php
            
            echo rupiah($invest->debit) ?></td>
		</tr>
		<tr class="text-center" <?php if($akumulasi == null) { echo 'hidden';} ?>>
			<td><?php echo $akumulasi->nama_akun?></td>
			<td><?php echo rupiah($akumulasi->kredit) ?></td>
		</tr>
		<tr class="text-center">
			<td style="font-weight: bold ;">Jumlah Aset Tidak Lancar</td>
			<td><?php
				if($invest == null) {
					$invest = 0;
				}else{
					$invest = $invest->debit;
				}
				if($akumulasi == null) {
					$akumulasi = 0;
				}else{
					$akumulasi = $akumulasi->kredit;
                }

				$total_aset_tidak_lancar = $invest - $akumulasi;
				echo rupiah($total_aset_tidak_lancar) ?></td>
		</tr>

        <tr class="text-center">
			<td style="font-weight: bold ;">Jumlah Aset Keseluruhan</td>
			<td><?php
				$total_aset = $total_aset_lancar + $total_aset_tidak_lancar;
				echo rupiah($total_aset) ?></td>
		</tr>
	</table>

    <hr>

    <table class="table  table-bordered mt-3">
		<tr>
			<h6 style="font-weight: bold ;">Passiva</h6>
			<h6 style="font-weight: bold ;" class="text-center">KEWAJIBAN DAN ASET BERSIH</h6>
            <h6 style="font-weight: bold ;">Kewajiban</h6>
            <h6 style="font-weight: bold ;">Kewajiban Jangka Pendek</h6>
            <th class="text-center">Jenis Akun</th>
            <th class="text-center">Jumlah</th>
		</tr>
		<tr class="text-center" <?php if($simpan_sukarela == null) { echo 'hidden';} ?>>
			<td><?php echo $simpan_sukarela->nama_akun ?></td>
			<td><?php
            echo rupiah($simpan_sukarela->kredit ) ?></td>
		</tr>
		<tr class="text-center" <?php if($hutang_pajak == null) { echo 'hidden';} ?>>
			<td><?php echo $hutang_pajak->nama_akun?></td>
			<td><?php echo rupiah($hutang_pajak->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($hutang_dansos == null) { echo 'hidden';} ?>>
			<td><?php echo $hutang_dansos->nama_akun?></td>
			<td><?php echo rupiah($hutang_dansos->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($hutang_sejahtera == null) { echo 'hidden';} ?>>
			<td><?php echo $hutang_sejahtera->nama_akun?></td>
			<td><?php echo rupiah($hutang_sejahtera->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($hutang_pajda == null) { echo 'hidden';} ?>>
			<td><?php echo $hutang_pajda->nama_akun?></td>
			<td><?php echo rupiah($hutang_pajda->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($hutang_pendidikan == null) { echo 'hidden';} ?>>
			<td><?php echo $hutang_pendidikan->nama_akun?></td>
			<td><?php echo rupiah($hutang_pendidikan->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($hutang_bagi == null) { echo 'hidden';} ?>>
			<td><?php echo $hutang_bagi->nama_akun?></td>
			<td><?php echo rupiah($hutang_bagi->kredit) ?></td>
		</tr>
        <tr class="text-center" <?php if($hutang_pengawas == null) { echo 'hidden';} ?>>
			<td><?php echo $hutang_pengawas->nama_akun?></td>
			<td><?php echo rupiah($hutang_pengawas->kredit) ?></td>
		</tr>
        <tr class="text-center" <?php if($hutang_pembangunan == null) { echo 'hidden';} ?>>
			<td><?php echo $hutang_pembangunan->nama_akun?></td>
			<td><?php echo rupiah($hutang_pembangunan->kredit) ?></td>
		</tr>
        <tr class="text-center" <?php if($bonus == null) { echo 'hidden';} ?>>
			<td><?php echo $bonus->nama_akun?></td>
			<td><?php echo rupiah($bonus->kredit) ?></td>
		</tr>
        <tr class="text-center" <?php if($pend_upkc == null) { echo 'hidden';} ?>>
			<td><?php echo $pend_upkc->nama_akun?></td>
			<td><?php echo rupiah($pend_upkc->kredit) ?></td>
		</tr>
        <tr class="text-center" <?php if($pend_parkir == null) { echo 'hidden';} ?>>
			<td><?php echo $pend_parkir->nama_akun?></td>
			<td><?php echo rupiah($pend_parkir->kredit) ?></td>
		</tr>
		<tr class="text-center">
			<td style="font-weight: bold ;">Jumlah Kewajiban Jangka Pendek</td>
			<td><?php
				if($simpan_sukarela == null) {
					$simpan_sukarela = 0;
				}else{
					$simpan_sukarela = $simpan_sukarela->kredit;
				}
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
				if($bonus == null) {
					$bonus = 0;
				}else{
					$bonus = $bonus->kredit;
				}

                if($pend_upkc == null) {
					$pend_upkc = 0;
				}else{
					$pend_upkc = $pend_upkc->kredit;
				}
				if($pend_parkir == null) {
					$pend_parkir = 0;
				}else{
					$pend_parkir = $pend_parkir->kredit;
				}

				$total_jangka_pendek = $simpan_sukarela + $hutang_pajak + $hutang_dansos + $hutang_sejahtera + $hutang_pajda + $hutang_pendidikan + $hutang_bagi + $hutang_pengawas + $hutang_pembangunan + $bonus + $pend_upkc + $pend_parkir;
				echo rupiah($total_jangka_pendek) ?></td>
		</tr>
	</table>

    <table class="table  table-bordered mt-3">
		<tr>
			<h6 style="font-weight: bold ;" class="text-center">MODAL DAN EKUITAS</h6>
            <h6 style="font-weight: bold ;">Kewajiban Jangka Panjang</h6>
            <th class="text-center">Jenis Akun</th>
            <th class="text-center">Jumlah</th>
		</tr>
		<tr class="text-center" <?php if($simpanan_pokok == null) { echo 'hidden';} ?>>
			<td><?php echo $simpanan_pokok->nama_akun ?></td>
			<td><?php
            echo rupiah($simpanan_pokok->kredit ) ?></td>
		</tr>
		<tr class="text-center" <?php if($simpanan_wajib == null) { echo 'hidden';} ?>>
			<td><?php echo $simpanan_wajib->nama_akun?></td>
			<td><?php echo rupiah($simpanan_wajib->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($modal_hibah == null) { echo 'hidden';} ?>>
			<td><?php echo $modal_hibah->nama_akun?></td>
			<td><?php echo rupiah($modal_hibah->kredit) ?></td>
		</tr>
		<tr class="text-center" <?php if($modal_cadangan == null) { echo 'hidden';} ?>>
			<td><?php echo $modal_cadangan->nama_akun?></td>
			<td><?php echo rupiah($modal_cadangan->kredit) ?></td>
		</tr>
        <?php if($bulan != 'Januari') : ?>
            <tr class="text-center" <?php if($zakat_shu == null) { echo 'hidden';} ?>>
			<td><?php echo $zakat_shu->nama_akun?></td>
			<td><?php echo rupiah($zakat_shu->kredit) ?></td>
		    </tr>
            <tr class="text-center">
                <?php
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
                        $total_laba = ($total_pendapatan - $total_biaya) - $pajak_final->debit;
                        $laba_bersih = $total_laba - $pendapat_lain->kredit - $biaya_adm->debit;
                        $shu = $zakat_shu->kredit + $laba_bersih;
                        echo rupiah($zakat_shu->kredit + $laba_bersih);
                ?> </td>
            </tr>
            <?php else: ?>
            <tr class="text-center" <?php if($zakat_shu == null) { echo 'hidden';} ?>>
			<td>SHU Tahun <?php echo $tahun - 1 ?></td>
			<td><?php echo rupiah($zakat_shu->kredit) ?></td>
		    </tr>

            <tr class="text-center" <?php if($zakat_shu == null) { echo 'hidden';} ?>>
			<td>SHU Tahun Berjalan</td>
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
            $total_laba = ($total_pendapatan - $total_biaya) - $pajak_final->debit;
            $laba_bersih = $total_laba - $pendapat_lain->kredit - $biaya_adm->debit;
            $shu = $zakat_shu->kredit + $laba_bersih;
            echo rupiah($zakat_shu->kredit + $laba_bersih) ?></td>
		    </tr>
            <?php endif; ?>
        <tr class="text-center">
            <td style="font-weight: bold;">Jumlah Modal Dan Ekuitas</td>
            <td> <?php 
            if($simpanan_pokok == null) {
                $simpanan_pokok = 0;
            }else{
                $simpanan_pokok = $simpanan_pokok->kredit;
            }
            if($simpanan_wajib == null) {
                $simpanan_wajib = 0;
            }else{
                $simpanan_wajib = $simpanan_wajib->kredit;
            }
            if($modal_hibah == null) {
                $modal_hibah = 0;
            }else{
                $modal_hibah = $modal_hibah->kredit;
            }
            if($modal_cadangan == null) {
                $modal_cadangan = 0;
            }else{
                $modal_cadangan = $modal_cadangan->kredit;
            }
            $jumlah_modal = $simpanan_pokok+ $modal_cadangan + $modal_hibah + $simpanan_wajib + $shu;
            echo rupiah($jumlah_modal);
            ?> </td>

        </tr>
        <tr class="text-center">
            <td style="font-weight: bold;" >JUMLAH PASSIVA</td>
            <td><?php echo rupiah($total_jangka_pendek + $jumlah_modal) ?></td>
        </tr>
        



</body>

<script type="text/javascript">
	window.print();
</script>

</html>