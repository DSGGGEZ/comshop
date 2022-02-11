<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fix Order
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Fix Case</li>
        <li class="active">Fix Order</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
              <div class="box-tools pull-right">
                <form class="form-inline">
                </form>
              </div>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>OrderID</th>
                  <th>CTID</th>
                  <th>CID</th>
                  <th>CaseID</th>
                  <th>CaseDate</th>
                  <th>CaseType</th>
                  <th>Detail</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM fixorder ORDER BY CaseDate";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      if($row['status']){
                        $status = '<span class="label label-danger">Completed</span>';
                      }
                      else{
                        $status = '<span class="label label-success">Working</span>';
                      }
                      echo "
                        <tr>
                          <td>".$row['OrderID']."</td>
                          <td>".$row['CTID']."</td>
                          <td>".$row['CID']."</td>
                          <td>".$row['CaseID']."</td>
                          <td>".$row['CaseDate']."</td>
                          <td>".$row['CaseType']."</td>
                          <td>".$row['Detail']."</td>
                          <td>".$status."</td>
                          <td>
                            <button class='btn btn-success btn-sm com btn-flat' data-id='".$row['id']."'><i class='fa fa-check'></i> Complete</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Reject</button>
                          </td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/fixorder_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $('#select_category').change(function(){
    var value = $(this).val();
    if(value == 0){
      window.location = 'fixorder.php';
    }
    else{
      window.location = 'fixorder.php?category='+value;
    }
  });

  $(document).on('click', '.com', function(e){
    e.preventDefault();
    $('#com').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'fixorder_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#com_fo').html('Finish order '+response.OrderID+' of Customer '+response.CID);
      $('#del_fo').html('Reject order '+response.OrderID+' of Customer '+response.CID);
    }
  });
}
</script>
</body>
</html>
