<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- header -->
	<?php $this->load->view('_partials/meta') ?>
	
	<title><?php echo TITLE_BAR ?></title>
	
	<!-- header -->
	<?php $this->load->view('_partials/style') ?>

</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<img src="<?php echo base_url('asset/backend/fileman/Uploads/images/user.png') ?>" width="100"><br>
			Codeigniter
		</div>

		<div class="login-box-body">
			<p class="login-box-msg">Please Sign In</p>

			<form action="<?php echo base_url('login/action_login') ?>" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Username" name="txt_name" required autofocus>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Password" name="txt_pass" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in"></i> Sign In</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!-- file javascript -->
	<?php $this->load->view('_partials/script') ?>
</body>
</html>