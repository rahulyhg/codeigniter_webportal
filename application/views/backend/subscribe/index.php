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
                <h1>All Subscriber</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-th-list"></i> Subscriber</a></li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <a onclick="addForm()" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Create New</a>
                            </div>
                            <div class="box-body">  
                                <table class="table table-hover tablesorter">
                                    <thead>
                                        <tr>
                                            <th class="header" style="width: 70px;">No</th>
                                            <th class="header">Email Subscriber</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
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
    	// declare variabel
        var table, save_method;

    	$(document).ready(function() {
    		table = $('.table').DataTable({
                "processing" : true,
                "serverside" : true,
                "ajax" : {
                    "url" : "<?php echo site_url('subscribe/data') ?>",
                    "type" : "GET"
                }
            });

    	});
    </script>
</body>
</html>