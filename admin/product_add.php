<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$PID = $_POST['PID'];
		$Brand = $_POST['Brand'];
		$Spec = $_POST['Spec'];
		$ProductType = $_POST['ProductType'];
		$Price = $_POST['Price'];
		$WarantyPeriod = $_POST['WarantyPeriod'];

		$sql = "INSERT INTO product (PID, Brand, Spec, ProductType, Price, WarantyPeriod) VALUES ('$PID', '$Brand', '$Spec', '$ProductType', '$Price', '$WarantyPeriod')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Product added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Need more information';
	}

	header('location: product.php');

?>