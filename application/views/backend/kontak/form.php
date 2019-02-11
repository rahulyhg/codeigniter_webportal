<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" area-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
     	<div class="modal-content">
     		<form class="form-horizontal" method="POST" enctype="multipart/form-data">
     			<div class="modal-header">
     				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times; </span></button>
     				<h3 class="modal-title"></h3>
     			</div>
     			
     			<div class="modal-body">
     				<input type="hidden" name="txt_id" id="txt_id">

                         <div class="form-group">
                              <label for="txt_nama" class="col-md-3 control-label">Name Contact</label>
                              <div class="col-md-9">
                                   <input type="text" name="txt_nama" id="txt_nama" class="form-control" readonly> 
                              </div>
                         </div>
                         
                         <div class="form-group">
                              <label for="txt_email" class="col-md-3 control-label">Email Contact</label>
                              <div class="col-md-9">
                                   <input type="text" name="txt_email" id="txt_email" class="form-control" readonly> 
                              </div>
                         </div>

                         <div class="form-group">
                              <label for="txt_subjek" class="col-md-3 control-label">Subject</label>
                              <div class="col-md-9">
                                   <input type="text" name="txt_subjek" id="txt_subjek" class="form-control" readonly> 
                              </div>
                         </div>

                         <div class="form-group">
                              <label for="txt_pesan" class="col-md-3 control-label">Message</label>
                              <div class="col-md-9">
                                  <textarea name="txt_pesan" id="txt_pesan" cols="10" rows="5" class="form-control" readonly></textarea>
                              </div>
                         </div>
                         <div class="form-group">
                              <label for="txt_balas" class="col-md-3 control-label">Reply Message</label>
                              <div class="col-md-9">
                                  <textarea name="txt_balas" id="txt_balas" cols="10" rows="5" class="form-control"></textarea>
                              </div>
                         </div>
     			</div>

     			<div class="modal-footer">
                         <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save Changes</button>
     				<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-remove"></i> Close</button>
     			</div>
     		</form>
     	</div>
    </div>
</div>