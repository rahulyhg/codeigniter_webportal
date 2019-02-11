<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- header -->
    <?php $this->load->view('_partials/meta') ?>
    
    <title><?php echo TITLE_BAR .' - '. $page_title ?></title>
    
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
                <h1>New Create Program</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-code"></i> Program</a></li>
                </ol>
            </section>
            <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <form class="form-horizontal" action="<?php echo site_url('program/insert') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="txt_nama" class="col-md-2 control-label">Name Article</label>
                                        <div class="col-md-10">
                                            <input type="text" name="txt_nama" id="txt_nama" class="form-control" autofocus required> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="img_program" class="col-md-2 control-label">Image</label>
                                        <div class="col-md-10">
                                            <input type="file" name="img_program" id="img_program" class="form-control"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="txt_deskripsi" class="col-md-2 control-label">Description</label>
                                        <div class="col-md-10">
                                            <textarea name="txt_deskripsi" id="txt_deskripsi" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save Change</button>
                                            <a href="<?php echo site_url('program') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
            

        <!-- footer content -->
        <?php $this->load->view('_partials/footer') ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- link js script -->
    <?php $this->load->view('_partials/script') ?>

    <script type="text/javascript">
        var roxyFileman = '<?php echo base_url('asset/backend/fileman/') ?>'; 

        $(function(){
            CKEDITOR.replace( 'txt_deskripsi',{
                filebrowserBrowseUrl:roxyFileman+'/index.html',
                filebrowserImageBrowseUrl:roxyFileman+'/index.html?type=image',
                removeDialogTabs: 'link:upload;image:upload'
            }); 
        });

    </script>
</body>
</html>