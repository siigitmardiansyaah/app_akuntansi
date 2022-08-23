<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Profile</h1>
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
					<h6 class="m-0 font-weight-bold text-primary">Profil Pengguna</h6>
				</div>
				<?php
        if ($this->session->flashdata('success')) { ?>
				<div
					class="alert alert-success alert-dismissible fade show"
					role="alert"
				>
					<?= $this->session->flashdata('success') ?>
					<button
						type="button"
						class="close"
						data-dismiss="alert"
						aria-label="Close"
					>
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php
        }
        ?>

				<?php
        if ($this->session->flashdata('error')) { ?>
				<div
					class="alert alert-warning alert-dismissible fade show"
					role="alert"
				>
					<?= $this->session->flashdata('error') ?>
					<button
						type="button"
						class="close"
						data-dismiss="alert"
						aria-label="Close"
					>
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php
        }
        ?>
				<div class="card-body">
					<form method="post" action="<?php echo base_url(); ?>profile/update" enctype="multipart/form-data">
						<div class="form-group">
							<label for="inputEmail4">Username</label>
							<input
								type="hidden"
								name="<?php echo $this->security->get_csrf_token_name(); ?>"
								value="<?php echo $this->security->get_csrf_hash(); ?>"
							/>
							<input
								type="hidden"
								name="id"
								id="id"
								value="<?php echo $profile->id ?>"
							/>
							<input
								type="text"
								class="form-control"
								value="<?php echo $profile->username ?>"
								id="username"
								name="username"
								placeholder="Masukkan Username"
							/>
						</div>
						<div class="form-group">
							<label for="inputEmail4">Nama</label>
							<input
								type="text"
								class="form-control"
								value="<?php echo $profile->nama ?>"
								id="nama"
								name="nama"
								placeholder="Masukkan Nama Lengkap"
							/>
						</div>
						<div class="form-group">
							<label for="inputEmail4">Password</label>
							<input
								type="password"
								class="form-control"
								id="password"
								name="password"
								placeholder="Kosongkan jika tidak ingin merubah password"
							/>
						</div>
						<div class="form-group" id="photo-preview">
							<label>Photo</label>
							<div class="col-md-12">
								<img
									src="<?php echo base_url('upload')?>/<?php echo $profile->foto ?>"
									alt=""
									width="100"
									height="100"
								/>
								<input
									type="checkbox"
									name="remove_photo"
									value="<?php echo $profile->foto ?>"
								/>
								Remove photo when saving
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<label>Upload Photo </label>
							<div class="col-md-12">
								<input name="photo" type="file" />
								<span class="help-block"></span>
							</div>
						</div>
						<div class="form-group">
							<input
								type="submit"
								name="preview"
								class="btn btn-primary"
								value="Save"
							/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
