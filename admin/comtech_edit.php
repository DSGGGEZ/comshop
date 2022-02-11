<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$ctid = $_POST['CTID'];
		$firstname = $_POST['FirstName'];
		$lastname = $_POST['LastName'];
		$address = $_POST['Address'];
		$zipcode = $_POST['Zipcode'];

		$sql = "UPDATE comtech SET CTID = '$ctid', FirstName = '$firstname', LastName = '$lastname', Address = '$address', Zipcode = '$zipcode' WHERE id='$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Comtech updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:comtech.php');

?>