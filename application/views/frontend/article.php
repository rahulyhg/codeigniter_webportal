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
            <h3 class="tittle">Article Posts</h3>
            <div class="row inner-sec">
                <!--left-->
                <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
                    <div class="row mb-4">
                        <?php foreach($artikels as $artikel): ?>
                        <div class="col-md-6 card my-4">
                            <a href="<?php echo site_url('welcome/article_read/'.$artikel->slug_artikel) ?>">
                                <img src="<?php echo base_url('asset/backend/fileman/Uploads/Images/Artikel/'.$artikel->gambar_artikel) ?>" width="100%" class="card-img-top img-fluid" alt="">
                            </a>
                            <div class="card-body">
                                <ul class="blog-icons my-4">
                                    <li></li>
                                    <li>
                                        <a href="#"><i class="fas fa-eye"></i> <?php echo $artikel->hits_artikel ?></a>
                                    </li>
                                </ul>
                                <h5 class="card-title ">
                                    <a href="<?php echo site_url('welcome/article_read/'.$artikel->slug_artikel) ?>"><?php echo $artikel->nama_artikel ?></a>
                                </h5>
                                <a href="<?php echo site_url('welcome/article_read/'.$artikel->slug_artikel) ?>" class="btn btn-primary read-m">Read More</a>
                            </div>
                            
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php echo $this->pagination->create_links() ?>
                </div>
                <!--//left-->
                <!--right-->
                <aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
                    <div class="right-blog-info text-left">
                        <div class="tech-btm">
                            <h4>Categories</h4>
                            <ul class="list-group single">
                            	<?php foreach($kategoris as $kategori): ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="<?php echo site_url('welcome/article_category/'.$kategori->slug_kategori) ?>"><?php echo $kategori->name_kategori ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="tech-btm">
                            <h4>Recent Articles</h4>
                            <?php foreach($recents as $recent): ?>
                            <div class="blog-grids row mb-3 text-left">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="<?php echo site_url('welcome/article_read/'.$recent->slug_artikel) ?>">
                                        <img src="<?php echo base_url('asset/backend/fileman/Uploads/Images/Artikel/'.$recent->gambar_artikel) ?>" class="card-img-top img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">
                                    <h5>
                                        <a href="<?php echo site_url('welcome/article_read/'.$recent->slug_artikel) ?>"><?php echo $recent->nama_artikel ?></a>
                                    </h5>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="tech-btm">
                            <h4>Popular Articles</h4>
                            <?php foreach($populars as $popular): ?>
                            <div class="blog-grids row mb-3 text-left">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="<?php echo site_url('welcome/article_read/'.$popular->slug_artikel) ?>">
                                        <img src="<?php echo base_url('asset/backend/fileman/Uploads/Images/Artikel/'.$popular->gambar_artikel) ?>" class="card-img-top img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">
                                    <h5>
                                        <a href="<?php echo site_url('welcome/article_read/'.$popular->slug_artikel) ?>"><?php echo $popular->nama_artikel ?></a>
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