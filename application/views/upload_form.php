<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Upload Form</h1>
  </div>
  <!-- Content Row -->
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
                  <input type="text" required class="form-control" id="file" name="file" value="<?php echo $filename ?>" readonly>
                </div>
              </div>
            </div>
          </form>
          <hr>
          <form method="post" action="<?php echo base_url(); ?>unggah/tampil_data" enctype="multipart/form-data" onsubmit='disableButton()'>
          <div class="form-row">
          <div class="form-group col-md-6">
                <label for="inputCity">Periode Bulan</label>
                <select name="bulan" id="bulan" class="form-control">
                  <option value=""> Pilih Bulan </option>
                  <?php 
                  $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                  foreach ($bulan as $bu) : ?>
                  <option value="<?php echo $bu ?>"> <?php echo $bu ?> </option>
                <?php endforeach; ?>
                </select>
          </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Periode Tahun</label>
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
              <div class="form-group col-md-12">
                <label for="inputState">Sheet Excel</label>
                <select id="nama_sheet" name="nama_sheet" class="form-control">
                  <option value=""> Pilih Sheet </option>
                  <?php foreach($sheet_name as $sn):?>
                    <option value="<?php echo $sn ?>"> <?php echo $sn ?></option>
                    <?php endforeach;?>
                </select>
              </div>
              <input type="hidden" name="preview" id="preview" value="Preview">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
              <input type="hidden" name="nama_file" value="<?php echo $filename ?>">
              <button type="submit" name="view" id="view" class="btn btn-primary" style="margin-right: 10px;"> Lihat </button>
              <a href="<?php echo base_url() ?>unggah/reset/<?php echo $filename ?>" id="reset" class="btn btn-info"> Reset </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>