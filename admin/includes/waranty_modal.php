<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Waranty</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="waranty_add.php">
            
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CustomerID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="CID" name="CID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">ProductID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="PID" name="PID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">WarantyDate</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="BoughtDate" name="BoughtDate" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">WarantyExpire</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="WarantyExpire" name="WarantyExpire" required>
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
              <h4 class="modal-title"><b>Edit Waranty Data</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="waranty_edit.php">
              <input type="hidden" class="id" name="id">
              <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CustomerID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_CID" name="CID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">ProductID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_PID" name="PID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">WarantyDate</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_BoughtDate" name="BoughtDate" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">WarantyExpire</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_WarantyExpire" name="WarantyExpire" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
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
              <form class="form-horizontal" method="POST" action="waranty_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE waranty</p>
                    <h2 id="del_war" class="bold"></h2>
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


     