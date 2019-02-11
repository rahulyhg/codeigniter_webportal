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
                <h1>Information Change</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> Information Change</a></li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box box-info">
                            <form class="form-horizontal" action="<?php echo site_url('informasi/change/'.$informasi->id_informasi) ?>" method="POST">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="address" class="col-md-2 control-label">Address</label>
                                        <div class="col-md-10">
                                            <textarea name="address" id="address" cols="30" rows="3" class="form-control"><?php echo $informasi->alamat ?></textarea> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-md-2 control-label">Email</label>
                                        <div class="col-md-10">
                                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $informasi->email ?>"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="telepon" class="col-md-2 control-label">Telepon</label>
                                        <div class="col-md-10">
                                            <input type="text" name="telepon" id="telepon" class="form-control" value="<?php echo $informasi->telepon ?>"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="facebook" class="col-md-2 control-label">Facebook</label>
                                        <div class="col-md-10">
                                            <input type="text" name="facebook" id="facebook" class="form-control" value="<?php echo $informasi->facebook ?>"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="twitter" class="col-md-2 control-label">Twitter</label>
                                        <div class="col-md-10">
                                            <input type="text" name="twitter" id="twitter" class="form-control" value="<?php echo $informasi->twitter ?>"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="instagram" class="col-md-2 control-label">Instagram</label>
                                        <div class="col-md-10">
                                            <input type="text" name="instagram" id="instagram" class="form-control" value="<?php echo $informasi->instagram ?>"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="youtube" class="col-md-2 control-label">YouTube</label>
                                        <div class="col-md-10">
                                            <input type="text" name="youtube" id="youtube" class="form-control" value="<?php echo $informasi->youtube ?>"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="about" class="col-md-2 control-label">About</label>
                                        <div class="col-md-10">
                                            <textarea name="about" id="about" cols="30" rows="3" class="form-control"><?php echo $informasi->tentang ?></textarea> 
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