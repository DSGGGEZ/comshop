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
			        				<th>Name</th>
									<th>Brand</th>
			        				<th>Spec</th>
			        				<th>Type</th>
									<th>BoughtDate</th>
									<th>WarantyExpire</th>
			        			</thead>
			        			<tbody>
			        			<?php
									$cid = $_SESSION['CID'];
			        				$sql = "SELECT * FROM iteminaccount LEFT JOIN customer ON customer.CID=iteminaccount.CID LEFT JOIN product ON product.PID = iteminaccount.PID ORDER BY iteminaccount.CID";
			        				$query = $conn->query($sql);
			        				while($row = $query->fetch_assoc()){
			        					echo "
			        						<tr>
												<td>".$row['CID']."</td>
												<td>".$row['PID']."</td>
												<td>".$row['Brand']."</td>
												<td>".$row['Spec']."</td>
												<td>".$row['ProductType']."</td>
												<td>".$row['BoughtDate']."</td>
												<td>".$row['WarantyExpire']."</td>
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
