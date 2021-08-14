<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta,title, CSS, favicons, etc.-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-widht, initial-scale=1">
	<link rel="icon" type="image/ico" href="assets/images/favicon.ico">
	<title>Sistem Informasi Akademik</title>

	<!--Bootstrap-->
	<link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!--Font Awesome-->
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!--NProgress-->
	<link href="assets/nprogress/nprogress.css" rel="stylesheet">
	<!--Icheck-->
	<link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
	<!--bootstrap-progessbar-->
	<link href="assets/bootstrap-progessbar/css/bootstrap-progessbar-3.3.4.min.css" rel="stylesheet">
	<!--Custom Theme Style-->
	<link href="assets/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
					</div>
					<br/>
					<!--sidebar menu-->

					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			    		<div class="menu_section">
						<ul class="nav side-menu">
							<li><a><i class="fa fa-desktop"></i> Data Mahasiswa <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
								<li><a href="index.php?page=tampil_mhs">Tampil Data</a></li>
								<li><a href="index.php?page=tambah_mhs">Tambah Data</a></li>
								</ul>
					  		 </li>
					  		  <li><a><i class="fa fa-desktop"></i> Nilai Mahasiswa <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
								<li><a href="index.php?page=tampilnilai">Tampil Nilai</a></li>
								<li><a href="index.php?page=tambahnilai">Tambah Nilai</a></li>
								</ul>
					  		 </li>
						</ul>
			    		</div>
			  		</div>
				</div>
				</div>

			<!--page content - HALAMAN UTAMA ISI DISINI-->
			<div class="right_col" role="main">
				<?php
				$queries = array();
				parse_str($_SERVER['QUERY_STRING'], $queries);
				error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
				switch ($queries['page']) {
					case 'tampil_mhs':
						# code...
					include 'tampil.php';
						break;
					case 'tambah_mhs':
						# code...
					include 'tambah.php';
						break;
					case 'edit_mhs':
						# code...
					include 'edit.php';
						break;
					case 'edit_mhs_save':
					# code...
					include 'edit.php';
					break;	
					case 'tampilnilai':
						# code...
					include 'tampilnilai.php';
						break;
					case 'tambahnilai':
						# code...
					include 'tambahnilai.php';
						break;
					case 'delete-nilai':
					# code...
					include 'delete-nilai.php';
					break;
					default:
					# code...
					include 'home.php';
					break;
				}
				?>
			</div>

				<!-- footer content-->
				<footer>
					<div class="pull-right">
						CopyRight@2021 Luro Lumbantoruan - 311910210 - TI.19.B.1
					</div>
					<div class="clearfix"></div>
				</footer>
				<!-- /footer content-->
		</div>
	</div>
	<!--jQuery-->
	<script src="assets/jquery/dist/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!--fastclick-->
	<script src="assets/fastclick/lib/fastclick.js"></script>
	<!--NProgress-->
	<script src="assets/nprogress/nprogress.js"></script>
	<!-- bootstrap-progressbar-->
	<script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!--iCheck-->
	<script src="assets/iCheck/iCheck.min.js"></script>
	<!--Skycons-->
	<script src="assets/skycons/skycons.js"></script>
	<!-- Custom Theme Scripts-->
	<script src="assets/js/custom.min.js"></script>
</body>
</html>