<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" area-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md">
     	<div class="modal-content">
     		<form class="form-horizontal" method="POST" enctype="multipart/form-data">
     			<div class="modal-header">
     				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times; </span></button>
     				<h3 class="modal-title"></h3>
     			</div>
     			
     			<div class="modal-body">
     				<input type="hidden" name="txt_id" id="txt_id">

     				<div class="form-group">
                              <label for="txt_nama" class="col-md-3 control-label">Name Video</label>
                              <div class="col-md-8">
                                   <input type="text" name="txt_nama" id="txt_nama" class="form-control" required> 
                              </div>
                         </div>

                         <div class="form-group">
                              <label for="txt_playlist" class="col-md-3 control-label">Playlist</label>
                              <div class="col-md-6">
                                  <select name="txt_playlist" id="txt_playlist" class="form-control" required>
                                        <option value=""></option>
                                        <?php foreach ($playlists as $playlist): ?>
                                        <option value="<?php echo $playlist->id_playlist ?>"><?php echo $playlist->nama_playlist ?></option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>
                         
                         <div class="form-group">
                              <label for="txt_konten" class="col-md-3 control-label">Content Video</label>
                              <div class="col-md-9">
                                   <textarea name="txt_konten" id="txt_konten" cols="15" rows="3" class="form-control"></textarea>     
                                   <!-- <input type="text" name="txt_konten" id="txt_konten" class="form-control" required=""> -->
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