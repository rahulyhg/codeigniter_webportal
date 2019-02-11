<header class="main-header">
	<a href="#" class="logo">
		<span class="logo-mini"><b>A</b>LT</span>
		<span class="logo-lg"><b>Admin</b>LTE</span>
	</a>
	<nav class="navbar navbar-static-top">
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url('asset/backend/fileman/Uploads/images/user.png') ?>" class="user-image" alt="User Image">
						<span class="hidden-xs"><?php echo $this->session->userdata('username') ?></span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<img src="<?php echo base_url('asset/backend/fileman/Uploads/images/user.png') ?>" class="img-circle" alt="User Image">
							<p><?php echo $this->session->userdata('username') ?></p>
						</li>
						<li class="user-footer">
							<div class="pull-left">
								<a href="<?php echo site_url('profile/edit/'.$this->session->userdata('id_user')) ?>" class="btn btn-default btn-flat">Edit Profile</a>
							</div>
							<div class="pull-right">
								<a href="<?php echo site_url('login/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>