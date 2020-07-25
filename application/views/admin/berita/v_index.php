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
						<a href="<?php echo site_url('admin/berita/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Image</th>
										<th>Berita</th>
										<th>Waktu</th>
										<th>Deskripsi</th>
										<!-- <td>Harga</td> -->
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($berita as $vw) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td>
												<img src="<?php echo base_url('upload/product/' . $vw->image) ?>" width="64" />
											</td>
											<td width="150">
												<?php echo $vw->nama ?>
											</td>
											<td><?= $vw->waktu ?></td>
											<td class="small">
												<?php echo substr($vw->deskripsi, 0, 120) ?>...</td>
											<td width="250">
												<a href="<?php echo site_url('admin/berita/edit/' . $vw->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
												<a onclick="deleteConfirm('<?php echo site_url('admin/berita/delete/' . $vw->id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
