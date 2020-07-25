<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Wisata</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="/admin">Admin</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/admin">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/wisata">Wisata</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/akomodasi">Akomodasi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/acara">Event</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/acara">Informasi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/berita">Berita</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/acara">Galeri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/acara">Tentang Kami</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/acara">Kritik dan Saran</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0" method="GET" action="/wisata">
				<input name="cari" class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-sm btn-outline-success my-2 mr-sm-2" type="submit">Search</button>
			</form>
			<form class="form-inline my-2 my-lg-0">
				<a href="<?php echo site_url("user/login") ?>" button class="btn btn-sm btn-outline-success mr-sm-1" type="submit">Login</a>
			</form>
		</div>
	</nav>

	<div class="container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Image</th>
					<th>Events</th>
					<th>Alamat</th>
					<th>Deskripsi</>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($events as $et) {
				?>
					<tr>
						<td><?= $no++ ?></td>
						<td>
							<img src="<?= base_url('upload/product/' . $et->image) ?>" width="64" />
						</td>
						<td><?= $et->event ?></td>
						<td><?= $et->alamat ?></td>
						<td><?= $et->deskripsi ?></td>
						<td>
							<?php //echo anchor('wisata/edit/' . $ws->id, 'Edit'); 
							?> |
							<?php //echo anchor('wisata/hapus/' . $ws->id, 'Hapus'); 
							?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<div align="center">
			<a type="button" href="<?php //echo site_url('wisata/tambah') 
									?>" class="btn btn-primary">Tambah Data</a>
		</div>
	</div>
</body>
