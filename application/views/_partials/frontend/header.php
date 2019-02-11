<header>
	<div class="top-bar_sub_w3layouts container-fluid">
		<div class="row">
				<div class="col-md-4 logo text-left">
					<a class="navbar-brand" href="#">Ngoding Sahabat</a>
				</div>
				<div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0"></div>
				<div class="col-md-4 log-icons text-right">
					<ul class="social_list1 mt-3">
						<li><a href="<?php echo $informasi->facebook ?>" target="_blank" class="facebook1 mx-2" ><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="<?php echo $informasi->twitter ?>" target="_blank" class="twitter2"><i class="fab fa-twitter"></i></a></li>
						<li><a href="<?php echo $informasi->instagram ?>" target="_blank" class="dribble3 mx-2"><i class="fab fa-instagram"></i></a></li>
						<li><a href="<?php echo $informasi->youtube ?>" target="_blank" class="pin"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="header_top" id="home">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('welcome') ?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('welcome/article') ?>">Article</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('welcome/program') ?>">Program</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('welcome/video') ?>">Video</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('welcome/contact') ?>">Contact</a>
						</li>
					</ul>
					<form action="<?php echo site_url('welcome/article_search') ?>" method="post" class="form-inline my-2 my-lg-0 header-search">
						<input class="form-control mr-sm-2" type="search" placeholder="Search article here..." name="txt_search" required="">
						<button class="btn btn1 my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
			</nav>
		</div>
	</div>
</header>