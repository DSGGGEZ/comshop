<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$cid = $_POST['CID'];
		$firstname = $_POST['FirstName'];
		$lastname = $_POST['LastName'];
		$address = $_POST['Address'];
		$district =  $_POST['District'];
		$zipcode = $_POST['Zipcode'];
		$balance = $_POST['Balance'];

		$sql = "UPDATE customer SET CID = '$cid', FirstName = '$firstname', LastName = '$lastname', Address = '$address', District = '$district', Zipcode = '$zipcode' , Balance = '$balance' WHERE id='$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Customer updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:customer.php');

?>