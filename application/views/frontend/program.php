<!DOCTYPE html>
<html lang="zxx">
<head>
	
	<!-- meta -->
	<?php $this->load->view('_partials/frontend/meta') ?>
	<!-- meta -->
	
	<link href="<?php echo base_url('asset/frontend/css/bootstrap.css') ?>" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url('asset/frontend/css/single.css') ?>" rel="stylesheet">
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
	<div class="banner-inner"></div>
	<ol class="breadcrumb"></ol>
	<!--//banner-->

	<!--/main-->
	 <section class="main-content-w3layouts-agileits">
        <div class="container">
            <h3 class="tittle">All Program</h3>
            <div class="inner-sec">
                <!--left-->
                <div class="left-blog-info-w3layouts-agileits text-left">
                    <div class="row">
                        <?php foreach($programs as $program): ?>
                        <div class="col-lg-4 card">
                            <a href="<?php echo site_url('welcome/program_view/'.$program->slug_program) ?>">
                                <img src="<?php echo base_url('asset/backend/fileman/Uploads/Images/Program/'.$program->gambar_program) ?>" class="card-img-top img-fluid" alt="">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo site_url('welcome/program_view/'.$program->slug_program) ?>"><?php echo $program->nama_program ?></a>
                                </h5>
                                <a href="<?php echo site_url('welcome/program_view/'.$program->slug_program) ?>" class="btn btn-primary read-m">Download More</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <!--//left-->
                </div>
            </div>
            <?php echo $this->pagination->create_links() ?>
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