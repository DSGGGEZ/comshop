<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Product</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="product_add.php">
            
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">PID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="PID" name="PID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Brand</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Brand" name="Brand" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Spec</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Spec" name="Spec" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">ProductType</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ProductType" name="ProductType" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Price" name="Price" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Waranty</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="WarantyPeriod" name="WarantyPeriod" required>
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
              <h4 class="modal-title"><b>Edit Customer Data</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="product_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">PID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="PID" name="PID" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Brand</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Brand" name="Brand" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Spec</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Spec" name="Spec" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">ProductType</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ProductType" name="ProductType" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Price" name="Price" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Waranty</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="WarantyPeriod" name="WarantyPeriod" required>
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
              <form class="form-horizontal" method="POST" action="product_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE Product</p>
                    <h2 id="del_pro" class="bold"></h2>
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


     