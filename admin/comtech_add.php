<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$ctid = $_POST['CTID'];
		$firstname = $_POST['FirstName'];
		$lastname = $_POST['LastName'];
		$address = $_POST['Address'];
		$zipcode = $_POST['Zipcode'];
		
		$sql = "INSERT INTO comtech(CTID, FirstName, LastName, Address, Zipcode) VALUES ('$ctid' , '$firstname', '$lastname', '$address', '$zipcode')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Comtech added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: comtech.php');
?>