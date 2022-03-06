<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Fixorder</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="fixorder_add.php">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">OrderID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="OrderID" name="OrderID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CaseID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="CaseID" name="CaseID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CTID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="CTID" name="CTID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="CID" name="CID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CaseDate</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="CaseDate" name="CaseDate" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CaseType</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="CaseType" name="CaseType" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Detail</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Detail" name="Detail" required>
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
<div class="modal fade" id="com">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Completing Order</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="fixorder_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>Complete Order</p>
                    <h2 id="com_fo" class="bold"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="com"><i class="fa fa-check"></i> Complete</button>
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
              <h4 class="modal-title"><b>Rejecting Order</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="fixorder_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>Reject Order</p>
                    <h2 id="del_fo" class="bold"></h2>
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


     