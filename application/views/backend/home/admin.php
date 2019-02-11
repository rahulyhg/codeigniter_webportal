<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- merta -->
	<?php $this->load->view('_partials/meta') ?>
	
	<title><?php echo TITLE_BAR ?></title>
	
	<!-- style CSS -->
	<?php $this->load->view('_partials/style') ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- header -->
		<?php $this->load->view('_partials/header') ?>

		<!-- sidebar -->
		<?php $this->load->view('_partials/sidebar') ?>
		
		<!-- content -->
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Dashboard</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
					<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				</ol>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3><?php echo $total_artikel ?></h3>
								<p>Total Article</p>
							</div>
							<div class="icon">
								<i class="fa fa-newspaper-o"></i>
							</div>
							<a href="<?php echo site_url('artikel') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-green">
							<div class="inner">
								<h3><?php echo $total_program ?></h3>
								<p>Total Program</p>
							</div>
							<div class="icon">
								<i class="fa fa-code"></i>
							</div>
							<a href="<?php echo site_url('program') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3><?php echo $total_video ?></h3>
								<p>Total Video</p>
							</div>
							<div class="icon">
								<i class="fa fa-youtube"></i>
							</div>
							<a href="<?php echo site_url('video') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>              
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-red">
							<div class="inner">
								<h3><?php echo $total_kontak?></h3>
								<p>Total Contact</p>
							</div>
							<div class="icon">
								<i class="fa fa-envelope"></i>
							</div>
							<a href="<?php echo site_url('kontak/all') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-desktop"></i> Info User</h3>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<table class="table">
											<tbody>
												<tr>
													<th width="150">ID user</th>
													<th>:</th>
													<td><?php echo $this->session->userdata('id_user') ?></td>
												</tr>
												<tr>
													<th width="150">Username</th>
													<th>:</th>
													<td><?php echo $this->session->userdata('username') ?></td>
												</tr>
												<tr>
													<th width="150">Subscriber</th>
													<th>:</th>
													<td><?php echo $total_subscribe ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-cloud"></i> Info Server</h3>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<table class="table">
											<tbody>
												<tr>
													<th width="150">Last Login</th>
													<th>:</th>
													<td><?php echo tanggal_indonesia(date('Y-m-d')) ?></td>
												</tr>
												<tr>
													<th width="150">IP Address</th>
													<th>:</th>
													<td><?php echo $_SERVER["REMOTE_ADDR"] ?></td>
												</tr>
												<tr>
													<th width="150">Server</th>
													<th>:</th>
													<td><?php echo $_SERVER['SERVER_NAME'] ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!-- footer -->
		<?php $this->load->view('_partials/footer') ?>
	</div>

	<!-- file javascript -->
	<?php $this->load->view('_partials/script') ?>
</body>
</html>