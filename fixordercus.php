<?php include 'includes/session.php'; ?>
<?php
	if(!isset($_SESSION['customer']) || trim($_SESSION['customer']) == ''){
		header('index.php');
	}
?>
<?php
	$where = '';
	if(isset($_GET['CID'])){
		$cid = $_GET['CID'];
		$where = 'WHERE iteminaccount.id = '.$cid;
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
	        	<div class="col-sm-10 col-sm-offset-1">
				<div class="box">
	        			<div class="box-header with-border">
							<h3>In Account List</h3>
	        				<?php
										if (isset($_POST['search'])) {
											$search = $_POST['search'];
											$sql = "SELECT * FROM product WHERE Brand LIKE '%$search%'";
										} else {
											$sql  = "SELECT * FROM product $where";
										}
										$query = $conn->query($sql)
										?>
										<form action="" method="post">
											<div class="input-group">
												<div class="form-outline"> <input type="search" id="search" name="search" class="form-control" placeholder="Search by movie name" value="<?php echo @$_POST['search']; ?>" /> </div>
												<span class="input-group-btn">
												<button type="submit" class="btn btn-primary">serch</button>
												</span>
											</div>
	        			</div>
	        			<div class="box-body">
	        				
	        				<table class="table table-bordered table-striped" id="booklist">
			        			<thead>
			        				<th>CustomerID</th>
									<th>CTID</th>
			        				<th>CaseID</th>
			        				<th>CaseType</th>
									<th>CaseDate</th>
			        			</thead>
			        			<tbody>
			        			<?php
			        				$sql = "SELECT * FROM fixorder LEFT JOIN customer ON customer.CID=fixorder.CID LEFT JOIN comtech ON comtech.CTID = fixorder.CTID";
			        				$query = $conn->query($sql);
			        				while($row = $query->fetch_assoc()){
			        					echo "
			        						<tr>
												<td>".$row['CID']."</td>
												<td>".$row['CTID']."</td>
												<td>".$row['OrderID']."</td>
												<td>".$row['CaseType']."</td>
												<td>".$row['CaseDate']."</td>
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
	$('#transelect').on('change', function(){
		var action = $(this).val();
		if(action == 'borrow'){
			window.location = 'productlist.php';
		}
		else{
			window.location = 'productlist.php?action='+action;
		}
	});
	$(function(){
	$('#catlist').on('change', function(){
		if($(this).val() == 0){
			window.location = 'index.php';
		}
		else{
			window.location = 'index.php?category='+$(this).val();
		}

	});
</script>
</body>
</html>
