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
                <h1>All Playlist</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-th-list"></i> Playlist</a></li>
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
                                            <th class="header" style="width: 50px;">No</th>
                                            <th class="header">Name Playlist</th>
                                            <th class="header">Slug</th>
                                            <th class="header" style="width:120px;">Action</th>
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
    
    <!-- this load form add and edit -->
    <?php $this->load->view('backend/playlist/form') ?>

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
                    "url" : "<?php echo site_url('playlist/data') ?>",
                    "type" : "GET"
                }
            });

            $('#modal-form').on('submit', function (e) {
                if (!e.isDefaultPrevented()) {

                    var id_playlist = $('#txt_id').val();

                    if (save_method == "add") url = "<?php echo site_url('playlist/insert') ?>";
                    else url = "playlist/update/"+id_playlist;

                    $.ajax({
                        url: url,
                        type: "POST",
                        data: $('#modal-form form').serialize(),
                        success: function(data){
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                        },
                        error: function(){
                            alert('data not save');
                        }
                    });
                    
                    return false;
                }
            });
    	});

    	function addForm() {
    		save_method = "add";
    		$('#modal-form').modal('show');
    		$('#modal-form form')[0].reset();
    		$('.modal-title').text('Insert Form New');
    	}

    	function editForm(id) {
            save_method = "edit";
            $('#modal-form form')[0].reset();

            $.ajax({
                url: "playlist/edit/"+id,
                type: "GET",
                dataType:"JSON",
                success: function(data){
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Form');

                    // memasukkan data yang didapatkan dari controller ke form modal
                    $('#txt_id').val(data.id_playlist);
                    $('#txt_nama').val(data.nama_playlist);
                },
                error: function(){
                    alert('data not change');
                }
            });
        }
        
        function deleteData(id) {
            if (confirm("Are You Sure for delete this ?")) {
                $.ajax({
                    url: "playlist/delete/"+id,
                    type: "POST",
                    success: function(data){
                        table.ajax.reload();
                    },
                    error: function(){
                        alert('data not deleted');
                    }
                });
            }
        }
    </script>
</body>
</html>