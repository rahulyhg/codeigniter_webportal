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
            <h3 class="tittle">ALL VIDEOS</h3>
            <div class="row inner-sec">
                <!--left-->
                <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
                    <div class="row mb-4">
                        <div class="col-md-12 card my-4">
                            <div class="card-body">
                            	<?php foreach($videos as $video): ?>
                                <ul class="blog-icons my-4">
                                    <li>
                                        <a href="<?php echo site_url('welcome/video_view/'.$video->slug_video) ?>">
                                            <i class="fas fa-play"></i> <?php echo $video->nama_video .' - '. $video->nama_playlist ?>
                                        </a>
                                    </li>
                                </ul>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php echo $this->pagination->create_links() ?>
                </div>
                <!--//left-->

                <!--right-->
                <aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
                    <div class="right-blog-info text-left">
                        <div class="tech-btm">
                            <h4>Playlist</h4>
                            <ul class="list-group single">
                                <?php foreach($playlists as $playlist): ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="<?php echo site_url('welcome/video_playlist/'.$playlist->slug_playlist) ?>"><?php echo $playlist->nama_playlist ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="tech-btm">
                            <h4>Recent Video</h4>
                            <?php foreach($recent_video as $video): ?>
                            <div class="blog-grids row mb-3 text-left">
                                <div class="col-md-12">
                                    <h5>
                                        <a href="<?php echo site_url('welcome/video_view/'.$video->slug_video) ?>">
                                        	<?php echo $video->nama_video ?>
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


</body>

</html>