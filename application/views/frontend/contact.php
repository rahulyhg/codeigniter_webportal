<!DOCTYPE html>
<html lang="zxx">
<head>
	
	<!-- meta -->
	<?php $this->load->view('_partials/frontend/meta') ?>
	<!-- meta -->
	
	<link href="<?php echo base_url('asset/frontend/css/bootstrap.css') ?>" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url('asset/frontend/css/contact.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('asset/frontend/css/style.css') ?>" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url('asset/frontend/css/fontawesome-all.css') ?>" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">

</head>

<body>
	<!--Header-->
	<?php $this->load->view('_partials/frontend/header') ?>
	<!--//header-->

	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
<!-- 		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active">Contact</li> -->
	</ol>
	<!--//banner-->

	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<h3 class="tittle">Contact Us</h3>
		<p class="sub text-center"></p>
		<div class="ad-inf-sec bg-light">
			<div class="container">
				<div class="address row">
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Address</h6>
								<p><?php echo $informasi->alamat ?></p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Email</h6>
								<p><a href="mailto:<?php echo $informasi->email ?>"><?php echo $informasi->email ?></a></p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-4 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-8 address-right text-left">
								<h6>Phone</h6>
								<p>+62 <?php echo $informasi->telepon ?></p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="contact_grid_right">
				<form action="<?php echo site_url('kontak/insert') ?>" method="post">
					<div class="row contact_left_grid">
						<div class="col-md-6 con-left">
							<div class="form-group">
								<label for="validationCustom01 my-2">Name</label>
								<input class="form-control" type="text" name="txt_nama" placeholder="" required="">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Email</label>
								<input class="form-control" type="email" name="txt_email" placeholder="" required="">
							</div>
							<div class="form-group">
								<label for="validationCustom03 my-2">Subject</label>
								<input class="form-control" type="text" name="txt_subjek" placeholder="" required="">
							</div>
						</div>
						<div class="col-md-6 con-right">
							<div class="form-group">
								<label for="textarea">Message</label>
								<textarea id="textarea" name="txt_pesan" placeholder=""></textarea>
							</div>
							<input class="form-control" type="submit" value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!--// main-->

	<!--footer-->
	<?php $this->load->view('_partials/frontend/footer') ?>
	<!--footer-->

	<!-- js -->
	<script src="<?php echo base_url('asset/frontend/js/jquery-2.2.3.min.js') ?>"></script>

	<!--/ start-smoth-scrolling -->
	<script src="<?php echo base_url('asset/frontend/js/move-top.js') ?>"></script>
	<script src="<?php echo base_url('asset/frontend/js/easing.js') ?>"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			
			// var defaults = {
	  // 			containerID: 'toTop', // fading element id
			// 	containerHoverID: 'toTopHover', // fading element hover id
			// 	scrollSpeed: 1200,
			// 	easingType: 'linear' 
	 	// 	};		

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<script src="<?php echo base_url('asset/frontend/js/bootstrap.js') ?>"></script>


</body>

</html>