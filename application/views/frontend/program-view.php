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
	<section class="banner-bottom">
        <div class="container">
            <div class="row">
                <!--left-->
                <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
                    <div class="blog-grid-top">
                        <div class="b-grid-top">
                            <div class="blog_info_left_grid">
                                <a href="#">
                                    <img src="<?php echo base_url('asset/backend/fileman/Uploads/Images/Program/'.$program->gambar_program) ?>" class="img-fluid" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                        <h3>
                            <a href="#"><?php echo $program->nama_program ?></a>
                        </h3>
                        <p><?php echo $program->deskripsi_program ?></p>
                    </div>
                </div>
                <!--//left-->

                <!--right-->
                <aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
                    <div class="right-blog-info text-left">
                        <div class="tech-btm">
                            <h4>Recent Program</h4>
                            <?php foreach($recent_program as $recent): ?>
                            <div class="blog-grids row mb-3 text-left">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="<?php echo site_url('welcome/program_view/'.$recent->slug_program) ?>">
                                        <img src="<?php echo base_url('asset/backend/fileman/Uploads/Images/Program/'.$recent->gambar_program) ?>" class="card-img-top img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">
                                    <h5>
                                        <a href="<?php echo site_url('welcome/program_view/'.$recent->slug_program) ?>">
                                        	<?php echo $recent->nama_program ?>
                                       	</a>
                                    </h5>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </aside>
                <!--//right-->
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

	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c20c0a63a6a2851"></script>
</body>

</html>