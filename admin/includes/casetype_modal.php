<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New CaseType</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="casetype_add.php">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CaseID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="CaseID" name="CaseID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CaseType</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="CaseType" name="CaseType" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">FixTime</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="FixTime" name="FixTime" required>
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
              <h4 class="modal-title"><b>Edit Casetype</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="casetype_edit.php">
              <input type="hidden" class="id" name="id">
              <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CaseID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_CaseID" name="CaseID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CaseType</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_CaseType" name="CaseType" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">FixTime</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_FixTime" name="FixTime" required>
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
              <form class="form-horizontal" method="POST" action="casetype_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE CaseType</p>
                    <h2 id="del_casetype" class="bold"></h2>
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


     