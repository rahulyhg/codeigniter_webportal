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
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- header -->
        <?php $this->load->view('_partials/header') ?>

        <!-- sidebar -->
        <?php $this->load->view('_partials/sidebar') ?>

        <!-- content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Profile Change</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-user"></i> Profile Change</a></li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box box-info">
                            <form class="form-horizontal" action="<?php echo site_url('profile/change/'.$this->session->userdata('id_user')) ?>" method="POST">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="txt_name" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="txt_name" name="txt_name" value="<?php echo $this->session->userdata('username') ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txt_pass" class="col-sm-2 control-label">New Password</label>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control" name="txt_pass" id="txt_pass" placeholder="New Password">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="col-md-10 col-md-offset-2">
                                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save Changes</button>
                                        <a href="<?php echo site_url('home') ?>" class="btn btn-warning"><i class="fa fa-remove"></i> Cancel</a>
                                    </div>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
            

        <!-- footer content -->
        <?php $this->load->view('_partials/footer') ?>
        <!-- /footer content -->
    </div>


    <!-- link js script -->
    <?php $this->load->view('_partials/script') ?>
</body>
</html>