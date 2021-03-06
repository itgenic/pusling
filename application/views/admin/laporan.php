<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
	<link rel="stylesheet" href="<?php echo base_url('assets/jquery-ui/jquery-ui.min.css'); ?>" />
	<!-- Load file css jquery-ui -->
	<script src="<?php echo base_url('js/jquery.min.js'); ?>"></script> <!-- Load file jquery -->
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center"
				href="<?php echo site_url('admin/overview')?>">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-book"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Admin Pusling</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('admin/overview')?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Menu
			</div>

			<!-- Nav Item - Profil -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('admin/profil')?>">
					<i class="fas fa-fw fa-user"></i>
					<span>Profil</span></a>
			</li>

			<!-- Nav Item - Galeri -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('admin/galeri')?>">
					<i class="fas fa-fw fa-image"></i>
					<span>Galeri</span></a>
			</li>

			<!-- Nav Item - Testimoni -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('admin/testimoni')?>">
					<i class="fas fa-fw fa-star"></i>
					<span>Testimoni</span></a>
			</li>


			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('admin/jadwal')?>">
					<i class="fas fa-fw fa-calendar"></i>
					<span>Jadwal</span></a>
			</li>

			<!-- Nav Item - Kontak -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('admin/kontak')?>">
					<i class="fas fa-fw fa-phone"></i>
					<span>Kontak</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Nav Item - User Management -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
					aria-expanded="true" aria-controls="collapseUtilities">
					<i class="fas fa-fw fa-users"></i>
					<span>User Management</span>
				</a>
				<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
					data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Data :</h6>
						<a class="collapse-item" href="<?php echo site_url('admin/user')?>">User Management</a>
						<a class="collapse-item" href="<?php echo site_url('admin/pustakawan')?>">Pustakawan</a>
					</div>
				</div>
			</li>

			<!-- Nav Item - Laporan -->
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo site_url('admin/laporan')?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Laporan</span></a>
			</li>

			<!-- Nav Item - Daftar Buku -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('admin/buku')?>">
					<i class="fas fa-fw fa-book"></i>
					<span>Daftar Buku</span></a>
			</li>

			<!-- Nav Item - Daftar Buku -->
			<li class="nav-item ">
				<a class="nav-link" href="<?php echo site_url('admin/kendaraan')?>">
					<i class="fas fa-fw fa-car"></i>
					<span>Data Kendaraan</span></a>
			</li>

			<!-- Nav Item - data Klasifikasi -->
			<!-- <li class="nav-item ">
				<a class="nav-link" href="<?php echo site_url('admin/klasifikasi')?>">
					<i class="fas fa-fw fa-book"></i>
					<span>Data klasifikasi</span></a>
			</li> -->

			<!-- Nav Item - QR -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('admin/cetakqr')?>">
					<i class="fas fa-fw fa-qrcode"></i>
					<span>Cetak QR</span></a>
			</li>



			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<?php $this->load->view("admin/_partials/navbar.php") ?>

				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Laporan</h1>
					</div>
					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Tabel Laporan</h6>
						</div>


						<div class="card-body">
							<?php if($this->session->flashdata('update') == TRUE): ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<?php echo $this->session->flashdata('update')?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<?php endif; ?>

							<?php if($this->session->flashdata('gagal_gagal') == TRUE): ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<?php echo $this->session->flashdata('gagal')?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<?php endif; ?>
							<?php if($this->session->flashdata('hapus') == TRUE): ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<?php echo $this->session->flashdata('hapus')?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<?php endif; ?>
							<form method="get" action="" class="col col-lg-6">

								<div class="row">
									<label>Filter Berdasarkan</label><br>
									<select name="filter" id="filter" class="form-control">
										<option value="">Pilih</option>
										<option value="1">Per Tanggal</option>
										<option value="2">Per Bulan</option>
										<option value="3">Per Tahun</option>
									</select>
									<br /><br />

									<div id="form-tanggal" class="form-group col-sm">
										<label>Tanggal</label><br>
										<input type="text" name="tanggal" class="input-tanggal form-control" />
										<br /><br />
									</div>

									<div id="form-bulan" class="form-group col-sm">
										<label>Bulan</label><br>
										<select name="bulan" class="form-control">
											<option value="">Pilih</option>
											<option value="1">Januari</option>
											<option value="2">Februari</option>
											<option value="3">Maret</option>
											<option value="4">April</option>
											<option value="5">Mei</option>
											<option value="6">Juni</option>
											<option value="7">Juli</option>
											<option value="8">Agustus</option>
											<option value="9">September</option>
											<option value="10">Oktober</option>
											<option value="11">November</option>
											<option value="12">Desember</option>
										</select>
										<br /><br />
									</div>

									<div id="form-tahun" class="form-group col-sm">
										<label>Tahun</label><br>
										<select name="tahun" class="form-control">
											<option value="">Pilih</option>
											<?php
                          foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                              echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                          }
                          ?>
										</select>
										<br /><br />
									</div>

								</div>








								<button type="submit" class="btn btn-primary">Tampilkan</button>
								<a href="<?php echo base_url('admin/laporan'); ?>" class="btn btn-danger">Reset
									Filter</a>
								<a href="<?php echo $url_cetak; ?>" class="btn btn-success"
									style="margin-top: 20px; margin-right: 20px; margin-bottom: 20px;">Cetak</a>
							</form>


							<hr />
							<center><b><?php echo $ket; ?></b></center>
							<br>
							<br>
							<div class="table-responsive">
								<table id="dataTable" class="table table-bordered" border="1" cellpadding="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>Nama</th>
											<th>Nama Assisten</th>
											<th>Nama Supir</th>
											<th>Jenis Pusling</th>
											<th>Kode Kendaraan</th>
											<th>Alamat Lokasi</th>
											<th>No Pengelola</th>
											<th>Total Pengunjung</th>
											<th>Total Laki-Laki</th>
											<th>Total Perempuan</th>
											<th>Gambar</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>Nama</th>
											<th>Nama Assisten</th>
											<th>Nama Supir</th>
											<th>Jenis Pusling</th>
											<th>Kode Kendaraan</th>
											<th>Alamat Lokasi</th>
											<th>No Pengelola</th>
											<th>Total Pengunjung</th>
											<th>Total Laki-Laki</th>
											<th>Total Perempuan</th>
											<th>Gambar</th>
											<th>Aksi</th>
										</tr>
									</tfoot>
									<tbody>
										<?php
                      if( ! empty($laporan)){
                        $no = 1;
                        foreach($laporan as $data){
                              $tgl = date('d-m-Y', strtotime($data->tgl_laporan));?>

										<tr>
											<td><?= $no++ ?></td>
											<td><?= $tgl ?></td>
											<td><?= $data->nama ?></td>
											<td><?= $data->nama_ast ?></td>
											<td><?= $data->nama_sup ?></td>
											<td><?= $data->jenis_pusling ?></td>
											<td><?= $data->kode_kendaraan ?></td>
											<td><?= $data->alamat_lokasi ?></td>
											<td><?= $data->no_pengelola ?></td>
											<td><?= $data->tot_pengunjung ?></td>
											<td><?= $data->tot_lk ?></td>
											<td><?= $data->tot_pr ?></td>
											<td>
												<a href="<?php echo base_url()?>assets/images_laporan/<?=$data->gambar?>"
													class="media-1 fancybox" data-fancybox="gallery2">
													<img src="<?php echo base_url('assets/images_laporan/'.$data->gambar) ?>"
														style="height: 100px; width: 100px;">
												</a>
											</td>
											<td style="text-align: center;">
												<a href="<?php echo base_url() ?>admin/laporan/edit/<?php echo $data->id_laporan ?>"
													class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
												<a href="<?php echo base_url() ?>admin/laporan/cetak_laporan/<?php echo $data->id_laporan ?>"
													class="btn btn-sm btn-info" target="_blank"><i
														class="fa fa-print"></i></a>
												<a title="Hapus" data-placement="right" class="btn btn-sm btn-danger"
													data-toggle="modal" href="#myModal"
													onclick="set_url('<?php echo base_url() ?>admin/laporan/hapus/<?php echo $data->id_laporan ?>');"><i
														class="fa fa-trash"></i></a>

											</td>
										</tr>
										<?php }} ?>
									</tbody>


								</table>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- End of Main Content -->

			<!-- Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>




	<?php $this->load->view("admin/_partials/modal.php") ?>

	<!-- Bootstrap core JavaScript-->
	<?php $this->load->view("admin/_partials/js.php") ?>
	<script src="<?php echo base_url('assets/jquery-ui/jquery-ui.min.js'); ?>"></script>
	<!-- Load file plugin js jquery-ui -->
	<script>
		$(document).ready(function () { // Ketika halaman selesai di load
			$('.input-tanggal').datepicker({
				dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
			});

			$('#form-tanggal, #form-bulan, #form-tahun')
				.hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

			$('#filter').change(function () { // Ketika user memilih filter
				if ($(this).val() == '1') { // Jika filter nya 1 (per tanggal)
					$('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
					$('#form-tanggal').show(); // Tampilkan form tanggal
				} else if ($(this).val() == '2') { // Jika filter nya 2 (per bulan)
					$('#form-tanggal').hide(); // Sembunyikan form tanggal
					$('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
				} else { // Jika filternya 3 (per tahun)
					$('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
					$('#form-tahun').show(); // Tampilkan form tahun
				}

				$('#form-tanggal input, #form-bulan select, #form-tahun select').val(
					''); // Clear data pada textbox tanggal, combobox bulan & tahun
			})
		})

	</script>



</body>

</html>
