<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">   
    <h1 class="h3 mb-0 text-gray-800">Unggah Form</h1>  
  </div>
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">Unggah Form</h6>
        </div>
        <?php
        if ($this->session->flashdata('error')) {
        ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('error') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php
        }
        ?>
        <!-- Card Body -->
        <div class="card-body">
          <form>
            <div class="form-row">
              <div class="form-group col-md-12">
              <label for="inputEmail4">Unggah Form</label>
                <div class="custom-file">
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                  <input type="text" required class="form-control" id="file" name="file" value="<?php echo $nama_file ?>" readonly>
                </div>
              </div>
            </div>
          </form>
          <hr>
          <form method="post" action="<?php echo base_url() ?>unggah/data_tampil" onsubmit='disableButton()'>
            <div class="form-row">
              <div class="form-group col-md-12" hidden>
                <?php
                if ($this->session->userdata('lang') == 'id') {
                  echo '<label for="inputEmail4">Nama File</label>';
                } else {
                  echo '<label for="inputEmail4">File Name</label>';
                }
                ?>
                <div class="custom-file">
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                  <input type="text" required class="form-control" id="file" name="file" value="<?php echo $nama_file ?>" readonly>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Periode Bulan</label>
                <select name="bulan" id="bulan" class="form-control">
                  <option value=""> Pilih Bulan </option>
                  <?php 
                  $bulan1=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                  foreach ($bulan1 as $bu) : ?>
                  <option <?php if($bu == $bulan) { echo 'selected'; }?> value="<?php echo $bu ?>"> <?php echo $bu ?> </option>
                <?php endforeach; ?>
                </select>
          </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Periode Tahun</label>
                <select name="bulan" id="bulan" class="form-control">
                  <option value=""> Pilih Tahun </option>
                  <?php 
                    $now=date('Y');
                    for ($a=2020;$a<=$now;$a++) : ?>
                    <option <?php if($a == $tahun) { echo 'selected'; } ?> value="<?php echo $a ?>"  ><?php echo $a ?></option>";
                    <?php endfor; ?>
                    ?>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label for="inputState">Sheet Excel</label>
                <select id="nama_sheet" name="nama_sheet" class="form-control">
                  <option value=""> Pilih Sheet </option>
                  <?php foreach($sheet_name as $sn):?>
                    <option <?php if($set == $sn) {echo 'selected';}?> value="<?php echo $sn ?>"> <?php echo $sn ?></option>
                    <?php endforeach;?>
                </select>
              </div>
            </div>
              <input type="hidden" name="preview" value="Preview" id="preview">
              <button type="submit" name="view" id="view" class="btn btn-primary" style="margin-right: 10px;"> Lihat </button>
              <a href="<?php echo base_url() ?>unggah/reset/<?php echo $nama_file ?>" class="btn btn-info"> Reset </a>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form 
      $nama_file = $this->input->post('nama_file');
      $set = $this->input->post('set');
      $bulan = $this->input->post('bulan');
      $tahun = $this->input->post('tahun');
      echo "<form method='post' action='" . base_url("unggah/import/$nama_file/$set/$bulan/$tahun") . "' onsubmit='disableButtonImport()'>";
      echo "<input type='hidden' name='". $this->security->get_csrf_token_name() ."' value='".$this->security->get_csrf_hash() ."' > ";
        echo '
      <hr>
      <div class="row">
      <!-- Area Chart -->
      <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Akun</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">';
        echo '
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class ="text-center">
                    <tr>
                        <th>No</th>
                        <th>No Akun</th>
                        <th>Nama Akun</th>
                        <th>Debit</th>
                        <th>Kredit</th>
                    </tr>
                </thead>
                <tbody>';
      $data = array();
      foreach ($sheet as $row) {
        // Ambil data pada excel sesuai Kolom
        if (($row['B'] !== '' && $row['B'] !== null && $row['B'] !== 'Nama Akun' && $row['B'] !== 'TOTAL')) {
          array_push($data, array(
            'no_akun' => $row['C'],
            'nama_akun' => $row['B'],
            'debit' =>  $row['H'],
            'kredit' => $row['I'],
          ));
        }
      }
      $no = 1;
      $array = array_unique($data, SORT_REGULAR);
      $tempArr = array_unique(array_column($data, 'no_akun'));
      $test = array_intersect_key($data, $tempArr);
      if (count($test) == 0) {
          echo '<tr>
          <td colspan="8" class="text-center"> Data Akun Tidak Ada </td>
          </tr>
          ';
      } else {
        foreach ($test as $k) {
          $no_akun = $k['no_akun'];
          $nama_akun = $k['nama_akun'];
          if($k['debit'] == '' || $k['debit'] == null)
          {
            $debit = 0;
          }else{
            $debit = $k['debit'];
          }
          $kredit = $k['kredit'];
          echo '<tr class = "text-center">';
          echo '<td>' . $no++ . '</td>';
          echo '<td>' . $no_akun . '</td>';
          echo '<td>' . $nama_akun . '</td>';
          echo '<td>' . $debit . '</td>';
          echo '<td>' . $kredit . '</td>';
          echo '</tr>';
        }
      }
      echo '
      </tbody>
      </table>
              </div>
              </div>
              </div>
            </div>
          </div>
';
echo '<button type="submit" id="import" class="btn btn-primary" name="import">Unggah</button>';
echo '</form>';
}
  ?>

</div>