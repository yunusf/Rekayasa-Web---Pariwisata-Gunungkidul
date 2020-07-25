<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/destinasi/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/destinasi/add') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="destinasi">Destinasi*</label>
								<input class="form-control <?php echo form_error('destinasi') ? 'is-invalid' : '' ?>" type="text" name="destinasi" placeholder="Destinasi Wisata" />
								<div class="invalid-feedback">
									<?php echo form_error('destinasi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="Alamat Destinasi" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Deskripsi*</label>
								<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>" name="deskripsi" placeholder="Deskripsi Destinasi..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('price') ? 'is-invalid' : '' ?>" type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
