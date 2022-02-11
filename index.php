<?php include 'includes/session.php'; ?>
<?php
	$where = '';
	if(isset($_GET['category'])){
		$catid = $_GET['category'];
		$where = 'WHERE category_id = '.$catid;
	}
?>
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
	        				<div class="input-group">
				                <input type="text" class="form-control input-lg" id="searchBox" placeholder="Search for Brand , Spec or Type" value="<?=$_GET["txtKeyword"];?>">
				                <span class="input-group-btn">
				                    <button type="button" class="btn btn-primary btn-flat btn-lg"><i class="fa fa-search"></i> </button>
				                </span>
				            </div>
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
			        				$sql = "SELECT * FROM product $where";
			        				$query = $conn->query($sql);
			        				while($row = $query->fetch_assoc()){
			        					$status = ($row['status'] == 0) ? '<span class="label label-success">available</span>' : '<span class="label label-danger">not available</span>';
			        					echo "
			        						<tr>
			        							<td>".$row['Brand']."</td>
			        							<td>".$row['Spec']."</td>
												<td>".$row['ProductType']."</td>
												<td>".$row['Price']."</td>
												<td>
													<button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-shopping-cart'></i> Add to Account</button>
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
	  </div>

  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
	$('#catlist').on('change', function(){
		if($(this).val() == 0){
			window.location = 'index.php';
		}
		else{
			window.location = 'index.php?category='+$(this).val();
		}

	});
});
</script>
</body>
</html>
