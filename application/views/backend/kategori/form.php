<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" area-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
     	<div class="modal-content">
     		<form class="form-horizontal" method="POST" enctype="multipart/form-data">
     			<div class="modal-header">
     				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times; </span></button>
     				<h3 class="modal-title"></h3>
     			</div>
     			
     			<div class="modal-body">
     				<input type="hidden" name="txt_id" id="txt_id">

     				<div class="form-group">
                              <label for="txt_name" class="col-md-3 control-label">Name Category</label>
                              <div class="col-md-9">
                                   <input type="text" name="txt_name" id="txt_name" class="form-control" required> 
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