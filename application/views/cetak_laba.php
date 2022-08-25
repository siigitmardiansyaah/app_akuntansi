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



	
	<table class="table table-striped table-bordered mt-3">


		<tr>
            <th>No</th>
            <th>Jenis Akun</th>
            <th>Jumlah</th>
		</tr>

        <?php 
        $no = 1;
        foreach($data as $d) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php if($d->nama_akun == 'Pendapatan Jasa Parkir') { echo $d->nama_akun;} ?></td>
            <td><?php if($d->nama_akun == 'Pendapatan UPKC') { echo $d->nama_akun;} ?></td>

        </tr>
        <?php endforeach; ?>

		
	</table>




</body>

<script type="text/javascript">
	window.print();
</script>

</html>