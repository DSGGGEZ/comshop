<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<?php
  $protype = 0;
  $where = '';
  if(isset($_GET['product'])){
    $protype = $_GET['product'];
    $where = 'WHERE product.ProductType = '.$protype;
  }

?>
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Product</li>
        <li class="active">Product List</li>
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
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Add Product</a>
            </div>
            <div class="box-body">
            <div class="form-group">
                    <label>Category: </label>
                    <select class="form-control input-sm" id="select_category">
                      <option value="0">ALL</option>
                      <?php
                        $sql = "SELECT ProductType FROM Product";
                        $query = $conn->query($sql);
                        while($catrow = $query->fetch_assoc()){
                          $selected = ($ProductType == $catrow['ProductType']) ? " selected" : "";
                          echo "
                            <option value='".$catrow['ProductType']."' ".$selected.">".$catrow['ProductType']."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>ProductID</th>
                  <th>Brand</th>
                  <th>Spec</th>
                  <th>ProductType</th>
                  <th>Price</th>
                  <th>Waranty</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM product ORDER BY PID";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){

                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".$row['PID']."</td>
                          <td>".$row['Brand']."</td>
                          <td>".$row['Spec']."</td>
                          <td>".$row['ProductType']."</td>
                          <td>".$row['Price']."</td>
                          <td>".$row['WarantyPeriod']."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
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
  <?php include 'includes/product_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
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
    url: 'product_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#edit_PID').val(response.PID);
      $('#edit_Brand').val(response.Brand);
      $('#edit_Spec').val(response.Spec);
      $('#edit_ProductType').val(response.ProductType);
      $('#edit_Price').val(response.Price);
      $('#edit_WarantyPeriod').val(response.WarantyPeriod);
      $('.del_pro').html(response.Type+' '+response.Spec);
    }
  });
}

</script>
</body>
</html>
