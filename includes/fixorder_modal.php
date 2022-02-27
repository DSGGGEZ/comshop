<?php
if(!isset($conn)){
  include 'includes/conn.php';
}
?>
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Fixorder</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="order_add.php">
                <div class="form-group">
                
                    <label for="name" class="col-sm-3 control-label">CTID</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="CTID" id="CTID" required="">
                        <option value="" selected="" disabled=""></option>
                        <?php  
                            $ctid = "SELECT * FROM comtech";
                            $ctqry = $conn->query($ctid);
                            while($row = $ctqry->fetch_array()):
                        ?>
                          <option value="<?php echo $row['CTID'] ?>"><?php echo ucwords($row['FirstName'].' '.$row['LastName']) . ' ['.$row['CTID'].']' ?></option>
                        <?php endwhile;  ?>
                      </select>
                      </div>
                </div>
                <div class="form-group">
               
                    <label for="CID" class="col-sm-3 control-label">CID</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" id="CID" name="CID" value="<?php $CID=$_SESSION['customer']; echo $CID ?>" disabled>
                      </div>
                </div>
                <div class="form-group">
                
                    <label for="CaseID" class="col-sm-3 control-label">CaseID</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="CaseID" id="CaseID" required="">
                        <option value="" selected="" disabled=""></option>
                        <?php  
                            $cid = "SELECT * FROM casetype";
                            $cqry = $conn->query($cid);
                            while($row = $cqry->fetch_array()):
                        ?>
                          <option value="<?php echo $row['CaseID'] ?>"><?php echo ucwords($row['CaseID'].' '.$row['CaseType'])?></option>
                        <?php endwhile;  ?>
                      </select>
                      </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">CaseDate</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="CaseDate" name="CaseDate" value="<?php $casedate = date('m-d-Y'); echo "$casedate" ?>" required disabled>
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
              <button type="submit" class="btn btn-primary btn-flat" name="addorder"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>


     