<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Users</h1>
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
					<h6 class="m-0 font-weight-bold text-primary">List Users</h6>
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
								<th>Username</th>
								<th>Nama</th>
								<th>Role</th>
								<th>Photo</th>
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
                <h5 class="modal-title">Users Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-12">
                                <input name="username" placeholder="Username" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-12">
                                <input name="nama" placeholder="Nama Lengkap" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-12">
                                <input name="password" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Role</label>
                            <div class="col-md-12">
                                <select name="role" class="form-control">
                                    <option value="">--Pilih Role--</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group" id="photo-preview">
                            <label class="control-label col-md-3">Photo</label>
                            <div class="col-md-12">
                                (No photo)
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" id="label-photo">Upload Photo </label>
                            <div class="col-md-12">
                                <input name="photo" type="file">
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
