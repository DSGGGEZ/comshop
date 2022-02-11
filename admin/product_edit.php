<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$pid = $_POST['PID'];
		$brand = $_POST['Brand'];
		$spec = $_POST['Spec'];
		$producttype = $_POST['ProductType'];
		$price = $_POST['Price'];
		$waranty = $_POST['WarantyPeriod'];

		$sql = "UPDATE product SET PID = '$pid', Brand = '$brand', spec = '$spec', ProductType = '$producttype', Price = '$price', WarantyPeriod = '$waranty' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Product updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:product.php');

?>