<!DOCTYPE html>
<html lang="en">

<head>
	<title>Panti Asuhan Anak &nbsp;|&nbsp; <?= $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?= base_url('frontend/assets/images/') . $komunitas->logo ?>" type="image/ico">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('frontend') ?>/dashboard/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('frontend') ?>/dashboard/css/animate.css">

	<link rel="stylesheet" href="<?= base_url('frontend') ?>/dashboard/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('frontend') ?>/dashboard/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('frontend') ?>/dashboard/css/magnific-popup.css">

	<!-- owl corousel -->
	<link rel="stylesheet" href="<?= base_url('frontend/OwlCarousel/') ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('frontend/OwlCarousel/') ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('frontend/OwlCarousel/') ?>css/owl.theme.default.min.css">

	<link rel="stylesheet" href="<?= base_url('frontend') ?>/dashboard/css/aos.css">

	<link rel="stylesheet" href="<?= base_url('frontend') ?>/dashboard/css/ionicons.min.css">

	<link rel="stylesheet" href="<?= base_url('frontend') ?>/dashboard/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('frontend') ?>/dashboard/css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url('frontend') ?>/dashboard/css/style.css">
	<style>
		.owl-item {
			-webkit-backface-visibility: hidden;
			-webkit-transform: translateZ(0) scale(1.0, 1.0);
		}

		.owl-carousel .owl-item {
			opacity: .9;
		}

		.dropdown-menu {
			margin-top: -10px;
		}
	</style>
	<style type="text/css">
		#Back-to-top {
			text-align: center;
			z-index: 9999;
			position: fixed;
			bottom: 20px;
			right: 10px;
			cursor: pointer;
			display: none;
			opacity: 0.7;
		}

		#Back-to-top:hover {
			opacity: 1;
		}
	</style>
</head>

<body>
	<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<img width="80px" src="<?= base_url('frontend/assets/images/' . $komunitas->logo) ?>" class="mt-1">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item <?= ($title == 'Home') ? 'active' : null ?>"><a href="<?= base_url() ?>" class="nav-link">Beranda</a></li>
					<li class="nav-item <?= ($title == 'Profile') ? 'active' : null ?>"><a href="<?= base_url('komunitas/prof') ?>" class="nav-link">Profile</a></li>
					<li class="nav-item <?= ($title == 'donasi') ? 'active' : null ?>"><a href="<?= base_url('komunitas/donasi') ?>" class="nav-link">Donasi Anda</a></li>
					<li class="nav-item <?= ($title == 'AnakAsuh') ? 'active' : null ?>"><a href="<?= base_url('komunitas/AnakAsuh') ?>" class="nav-link">AnakAsuh</a></li>
					<!-- $data['menu'] = $this->GetKomunitas_model->getmenu()->result(); -->
					<?php
                    foreach ($menu as $value) {
                        ; ?>
						<!-- echo $value->menu; -->

						<li class="nav-item <?= ($title == $value->menu) ? 'active' : null ?>"><a href="<?= base_url('komunitas/menu/') . $value->id_menu ?>" class="nav-link"> <?= $value->menu; ?></a></li>
					<?php
                    }; ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	<div class="owl-headers owl-carousel ftco-owl">
		<?php foreach ($image as $s_image) { ?>
			<div class="hero-wrap item js-fullheight" style="background-image: url('<?= base_url('frontend/assets/images/dashboard/' . $s_image->image) ?>'); background-size: cover" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
						<div class="col-md-12 ftco-animate">
							<h2 class="subheading">Selamat Datang</h2>
							<h1>Panti Asuhan Anak
								<span class="txt-rotate" data-period="2000" data-rotate='[ "NURUL ILMI DERWATI" ]'></span>
							</h1>
							<p class="mb-4"><?= $this->db->get('lain_lain')->row()->selamat_datang ?></p>
							<p>
								<a href="<?= base_url('login') ?>" class="btn btn-info mr-2 py-2 px-4"> Mari Berbagi</a>
								<!-- <a href="<?= base_url('login') ?>" class="btn btn-success mr-2 py-2 px-4"> Login</a> -->
							</p>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>