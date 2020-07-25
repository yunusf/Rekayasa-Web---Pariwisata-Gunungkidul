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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/galeri/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
							<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/events/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $rubah->id ?>" />

							<div class="form-group">
								<label for="nama">Judul*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Judul" value="<?php echo $rubah->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="waktu">Waktu</label>
								<input class="form-control <?php echo form_error('waktu') ? 'is-invalid' : '' ?>" type="date" name="waktu" min="0" value="<?php echo $rubah->waktu ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('waktu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image" />
								<input type="hidden" name="old_image" value="<?php echo $rubah->image ?>" />
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
