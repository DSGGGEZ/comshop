<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Comtech</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="comtech_add.php">
            
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="CTID" name="CTID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">FirstName</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="FirstName" name="FirstName" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">LastName</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="LastName" name="LastName" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Address" name="Address" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Zipcode</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Zipcode" name="Zipcode" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Comtech Data</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="comtech_edit.php">
              <input type="hidden" class="id" name="id">
              <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_CTID" name="CTID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">FirstName</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_FirstName" name="FirstName" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">LastName</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_LastName" name="LastName" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_Address" name="Address" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Zipcode</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_Zipcode" name="Zipcode" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="comtech_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE Comtech</p>
                    <h2 id="del_ct" class="bold"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>


     