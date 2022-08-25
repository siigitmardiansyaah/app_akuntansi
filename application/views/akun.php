<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Akun</h1>
	</div>

	<!-- Content Row -->
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Filter Data
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form id="form-filter" class="form-horizontal">
                            <div class="form-group">
                                <label for="FirstName" class="col-sm-12 control-label">Bulan</label>
                                <div class="col-sm-12">
                                    <select name="bulan" id="bulan" class="form-control">
                                        <option value=""> Pilih Bulan </option>
                                        <?php 
                                        $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                        foreach ($bulan as $bu) : ?>
                                        <option value="<?php echo $bu ?>"> <?php echo $bu ?> </option>
                                      <?php endforeach; ?>
                                      </select>
                                        </div>
                            </div>
                            <div class="form-group">
                                <label for="LastName" class="col-sm-12 control-label">Tahun</label>
                                <div class="col-sm-12">
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
                            </div>
                            <div class="form-group">
                                <label for="LastName" class="col-sm-2 control-label"></label>
                                <div class="col-sm-4">
                                    <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                                    <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>              </div>
            </div>
          </div>
    </div>
    <br/>
    <br/>

	<div class="row">
		<!-- Area Chart -->
		<div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div
					class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
				>
					<h6 class="m-0 font-weight-bold text-primary">List Akun</h6>
				</div>
				<!-- Card Body -->
				<div class="card-body">
                    <div class="float-right">
                        <button class="btn btn-success btn-sm btn-icon-split" onclick="reload_table()">
                            <span class="icon text-white-50">
                                <i class="fas fa-recycle"></i>
                            </span>
                                <span class="text">Reload</span>
                        </button>

                        <button class="btn btn-primary btn-sm btn-icon-split" onclick="add_person()">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                                <span class="text">Add Akun</span>
                        </button>
                    </div>
					<br />
					<br />
					<table
						id="table"
						class="table table-striped table-bordered"
						cellspacing="0"
						width="100%"
					>
						<thead class="text-center">
							<tr>
								<th>No</th>
								<th>No Akun</th>
								<th>Nama Akun</th>
								<th>Debit</th>
								<th>Kredit</th>
								<th>Bulan</th>
								<th>Tahun</th>
								<th style="width: 150px">Action</th>
							</tr>
						</thead>
						<tbody class="text-center">

                        </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Akun Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">No Akun</label>
                            <div class="col-md-12">
                                <input name="no_akun" placeholder="No Akun" class="form-control" type="text" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Akun</label>
                            <div class="col-md-12">
                                <input name="nama_akun" placeholder="Nama Akun" class="form-control" type="text" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Debit</label>
                            <div class="col-md-12">
                                <input name="debit" placeholder="Jumlah Debit" class="form-control" type="number" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kredit</label>
                            <div class="col-md-12">
                                <input name="kredit" placeholder="Jumlah Kredit" class="form-control" type="number" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Bulan</label>
                            <div class="col-md-12">
                                <select name="bulan1" id="bulan1" class="form-control" required>
                                <option value=""> Pilih Bulan </option>
                                    <?php 
                                    $bulan1=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    foreach ($bulan1 as $bu) : ?>
                                    <option value="<?php echo $bu ?>"> <?php echo $bu ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tahun</label>
                            <div class="col-md-12">
                                <select name="tahun1" id="tahun1" class="form-control" required>
                                <option value=""> Pilih Tahun </option>
                                <?php 
                                $now=date('Y');
                                for ($a=2020;$a<=$now;$a++) : ?>
                                <option value="<?php echo $a ?>"  > <?php echo $a ?></option>";
                                <?php endfor; ?>
                                ?>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
