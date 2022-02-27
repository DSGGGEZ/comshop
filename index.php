<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>

	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-8 col-sm-offset-2">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div class="box">
					<div class="box-header with-border">
							<h3>Product List</h3>
	        			</div>
	        			<div class="box-header with-border">
	        			</div>
	        			<div class="box-body">
							
	        				<table class="table table-bordered table-striped" id="booklist">
			        			<thead>
			        				<th>Brand</th>
			        				<th>Spec</th>
			        				<th>Type</th>
			        				<th>Price</th>
									<th>Status</th>
			        			</thead>
			        			<tbody>
			        			<?php
			        				$sql = "SELECT * FROM product";
			        				$query = $conn->query($sql);
			        				while($row = $query->fetch_assoc()){
									?>
			        					<tr>
			        						<td><?php echo $row['Brand']?></td>
			        						<td><?php echo $row['Spec']?></td>
											<td><?php echo $row['ProductType']?></td>
											<td><?php echo $row['Price']?></td>
											<td>
												<a href="buy.php?PID=<?php echo $row['PID'] ?>?price=<?php echo $row['Price'] ?>" class="btn btn-success" role="button">Buy now</a>
											</td>
			        					</tr>
										<?php
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
	  </div>

  	<?php include 'includes/footer.php'; ?>
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
    url: 'buy_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#edit_PID').val(response.PID);
      $('#edit_CID').val(response.CID);
      $('#edit_BoughtDate').val(response.BoughtDate);
      $('#edit_WarantyExpire').val(response.WarantyExpire);
      $('.del_war').html(response.PID+' '+response.CID+' '+response.Spec);
    }
  });
}
</script>
</body>
</html>