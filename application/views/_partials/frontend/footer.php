<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 footer-grid-agileits-w3ls text-left">
				<h3>About US</h3>
				<p><?php echo $informasi->tentang ?></p>
				<div class="read">
					<a href="single.html" class="btn btn-primary read-m">Read More</a>
				</div>
			</div>
			<!-- subscribe -->
			<div class="col-lg-6 subscribe-main footer-grid-agileits-w3ls text-left">
				<h2>Signup to our newsletter</h2>
				<div class="subscribe-main text-left">
					<div class="subscribe-form">
						<form action="<?php echo site_url('subscribe/insert') ?>" method="post" class="subscribe_form">
							<input class="form-control" type="email" name="txt_subscribe" placeholder="Enter your email..." required="">
							<button type="submit" class="btn btn-primary submit">Submit</button>
						</form>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //subscribe -->
			</div>
		</div>
					
		<!-- footer -->
		<div class="footer-cpy text-center">
			<div class="footer-social">
				<div class="copyrighttop">
					<ul>
						<li class="mx-3">
							<a class="facebook" href="<?php echo $informasi->facebook ?>">
								<i class="fab fa-facebook-f"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li>
							<a class="facebook" href="<?php echo $informasi->twitter ?>">
								<i class="fab fa-twitter"></i>
								<span>Twitter</span>
							</a>
						</li>
						<li class="mx-3">
							<a class="facebook" href="<?php echo $informasi->instagram ?>">
								<i class="fab fa-instagram"></i>
								<span>Instagram</span>
							</a>
						</li>
						<li>
							<a class="facebook" href="<?php echo $informasi->youtube ?>">
								<i class="fab fa-youtube"></i>
								<span>YouTube</span>
							</a>
						</li>
					</ul>

				</div>
			</div>
			<div class="w3layouts-agile-copyrightbottom">
				<p>© 2018 Ngoding Sahabat. All Rights Reserved | Design by
					<a href="http://w3layouts.com/">W3layouts</a>
				</p>
			</div>
		</div>	
	</div>
</footer>