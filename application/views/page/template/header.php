<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | E-Shopper</title>
	<link href="<?php echo base_url('frontend/css/bootstrap.min.css" rel="stylesheet') ?>">
	<link href="<?php echo base_url('frontend/css/font-awesome.min.css" rel="stylesheet') ?>">
	<link href="<?php echo base_url('frontend/css/prettyPhoto.css" rel="stylesheet') ?>">
	<link href="<?php echo base_url('frontend/css/price-range.css" rel="stylesheet') ?>">
	<link href="<?php echo base_url('frontend/css/animate.css" rel="stylesheet') ?>">
	<link href="<?php echo base_url('frontend/css/main.css" rel="stylesheet') ?>">
	<link href="<?php echo base_url('frontend/css/responsive.css" rel="stylesheet') ?>">
	<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="<?php echo base_url('') ?>frontend/images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('frontend/images/ico/apple-touch-icon-144-precomposed.png') ?>">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('frontend/images/ico/apple-touch-icon-114-precomposed.png') ?>">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('frontend/images/ico/apple-touch-icon-72-precomposed.png') ?>">
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url('frontend/images/ico/apple-touch-icon-57-precomposed.png') ?>">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo base_url() ?>"><img src="<?php echo base_url('frontend/images/home/logo.png') ?>" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if (($this->session->userdata("LoggedInCustomer"))||($this->session->userdata("SignupCustomer"))){?>
								<li>
									<a href="#"> 
										<?php
											if (($this->session->userdata("LoggedInCustomer"))){
												echo '<i class="fa fa-user"> '.$this->session->userdata("LoggedInCustomer")['username'] . '</i>';
											}elseif(($this->session->userdata("SignupCustomer"))){
												echo '<i class="fa fa-user"> '.$this->session->userdata("SignupCustomer")['name'] . '</i>';
											}
										?>
									</a>
								</li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="<?php echo base_url('checkout') ?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?php echo base_url('dang-xuat') ?>"><i class="fa fa-crosshairs"></i> Logout</a></li>
								<li><a href="<?php echo base_url('cart') ?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php }else{ ?>
									<li><a href="<?php echo base_url('cart') ?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
									<li><a href="<?php echo base_url('dang-nhap') ?>"><i class="fa fa-lock"></i> Login</a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url() ?>" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Categories<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<?php foreach ($categories as $category) {?>
										<li><a href="<?php echo base_url('thuong-hieu/'. $category->id)?>"><?php echo $category->title?></a></li>
										<?php }?>
									</ul>
								</li>
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
									</ul>
								</li>
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search" />
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
