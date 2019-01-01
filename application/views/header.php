<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<!-- loading jquery library -->
	<script src="<?php echo base_url('assets/jquery/jquery.js');?> "></script>

	<!-- loading bootstrap js  -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

	<!-- loading bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

	<!-- loading fontawesome css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/all.css');?>">

	<!-- including custom style -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/newstyle.css');?> ">

	</head>
	<body>

		<div class="container-fluid bg-light border-bottom pt-2 pb-2">
			<div class="row topsocial" >
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 m-auto">
					<a href="" class="text-center"><i class="fas fa-envelope"></i> mailus@admin.com </a>

				</div>

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 m-auto">
					<a href=""><i class="fas fa-phone"></i> +919939393990</a>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 m-auto ">
					
					<a href="" class="ml-2"><i class="fab fa-facebook-f"></i></a>
					<a href="" class="ml-2"><i class="fab fa-twitter"></i></a>
					<a href="" class="ml-2"><i class="fab fa-linkedin-in"></i></a>
					<a href="" class="ml-2"><i class="fab fa-google-plus-g"></i></a>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-expand-md navbar-dark bg-danger sticky-top">
			<div class="container-fluid">
				<a href="" class="navbar-brand">CRUD DEMO </a>

				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynavbar">
					<span class="navbar-toggler-icon"> </span>
				</button>

				<div class="collapse navbar-collapse" id="mynavbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="#" class="nav-link active"> <i class="fas fa-home"></i> Home </a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"> About </a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"> Services </a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"> Contact </a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</body>
	</html>