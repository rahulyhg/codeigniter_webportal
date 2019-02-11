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
                <h1>Edit Article</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-newspaper-o"></i> Article</a></li>
                </ol>
            </section>
            <section class="content">
                <form class="form-horizontal" action="<?php echo site_url('artikel/update/'.$artikel->id_artikel) ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="box">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="txt_kategori" class="col-md-2 control-label">Category</label>
                                        <div class="col-md-10">
                                            <select name="txt_kategori" id="txt_kategori" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($kategoris as $kategori): ?>
                                                <option <?php if($kategori->id_kategori == $artikel->kategori_id) echo "selected" ?> value="<?php echo $kategori->id_kategori ?>"><?php echo $kategori->name_kategori ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="img_image" class="col-md-2 control-label">Image</label>
                                        <div class="col-md-10">
                                            <input type="file" name="img_image" id="img_image" class="form-control">
                                            <br>
                                            <img width="200" height="180" src="<?php echo base_url('asset/backend/fileman/Uploads/Images/Artikel/'.$artikel->gambar_artikel) ?>""><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-8">
                            <div class="box">
                                <div class="box-body">  
                                    <div class="form-group">
                                        <label for="txt_name" class="col-md-2 control-label">Name Article</label>
                                        <div class="col-md-10">
                                            <input type="text" name="txt_name" id="txt_name" class="form-control" value="<?php echo $artikel->nama_artikel ?>"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="txt_konten" class="col-md-2 control-label">Content</label>
                                        <div class="col-md-10">
                                            <textarea name="txt_konten" id="txt_konten" cols="30" rows="10" class="form-control"><?php echo $artikel->konten_artikel ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save Change</button>
                                            <a href="<?php echo site_url('artikel') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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

    	$(document).ready(function() {
    		table = $('.table').DataTable({
                "processing" : true,
                "serverside" : true,
                "ajax" : {
                    "url" : "<?php echo site_url('artikel/data') ?>",
                    "type" : "GET"
                }
            });

    	});

        var roxyFileman = '<?php echo base_url('asset/backend/fileman/') ?>'; 

        $(function(){
            CKEDITOR.replace( 'txt_konten',{
                filebrowserBrowseUrl:roxyFileman+'/index.html',
                filebrowserImageBrowseUrl:roxyFileman+'/index.html?type=image',
                removeDialogTabs: 'link:upload;image:upload'
            }); 
        });

    </script>
</body>
</html>