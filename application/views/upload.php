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
          <form method="post" action="<?php echo base_url(); ?>unggah/form" enctype="multipart/form-data" onsubmit='disableButton()'>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Unggah Form</label>
                <div class="custom-file">
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                  <input type="file" required class="custom-file-input" id="file" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                  <label class="custom-file-label" for="customFile">Pilih File</label>
                </div>
              </div>
            </div>
              <button type="submit" class="btn btn-primary" id="btn_upload" value="Unggah"> Lanjutkan </button>
          </form>
          <hr>
          <form>
          <div class="form-row">
          <div class="form-group col-md-6">
                <label for="inputCity">Periode Bulan</label>
                <select name="bulan" id="bulan" class="form-control" readonly disabled>
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
                <select name="bulan" id="bulan" class="form-control" readonly disabled>
                  <option value=""> Pilih Tahun </option>
                  <?php 
                  $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                  foreach ($bulan as $bu) : ?>
                  <option value="<?php echo $bu ?>"> <?php echo $bu ?> </option>
                <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label for="inputState">Sheet Excel</label>
                <select id="set" name="set" class="form-control" readonly disabled>
                  <option value=""> Pilih Sheet </option>
                </select>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>