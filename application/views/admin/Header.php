<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Gentelella Alela! | </title>

	<!-- Bootstrap -->
	<link href="<?= base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?= base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="<?= base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<!-- bootstrap-datetimepicker -->
	<link href="<?= base_url();?>assets//vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"
		rel="stylesheet">
	<!-- Datatables -->
	<link href="<?=base_url();?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url();?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url();?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
		rel="stylesheet">
	<link href="<?=base_url();?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"
		rel="stylesheet">
	<link href="<?=base_url();?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"
		rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?= base_url();?>assets/build/css/custom.min.css" rel="stylesheet">

</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Keuangan Mesjid</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="<?= base_url();?>assets/images/img.jpg" alt="." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>Admin Keuangan</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a href="<?=base_url();?>c_admin"><i class="fa fa-home"></i> Home </a>
								<li><a href="<?=base_url();?>c_admin/v_infak"><i class="fa fa-book"></i> Data Infaq </a>
								<li><a href="<?=base_url();?>c_login/logout"><i class="fa fa-power-off"></i> Logout </a>

								</li>




							</ul>
						</div>


					</div>
					<!-- /sidebar menu -->
