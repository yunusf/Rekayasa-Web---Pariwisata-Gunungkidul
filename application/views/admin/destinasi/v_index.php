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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/destinasi/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Image</th>
										<th>Destinasi</th>
										<th>Alamat</th>
										<th>Deskripsi</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($destinasi as $dt) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td>
												<img src="<?php echo base_url('upload/product/' . $dt->image) ?>" width="64" />
											</td>
											<td width="150">
												<?php echo $dt->destinasi ?>
											</td>
											<td class="small">
												<?php echo substr($dt->alamat, 0, 120) ?>...</td>
											<td class="small">
												<?php echo substr($dt->deskripsi, 0, 120) ?>...</td>
											<td width="250">
												<a href="<?php echo site_url('admin/destinasi/edit/' . $dt->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
												<a onclick="deleteConfirm('<?php echo site_url('admin/destinasi/delete/' . $dt->id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
											</td>
										</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>

</body>

</html>
