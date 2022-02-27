<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$cid = $_POST['CID'];
		$password = $_POST['password'];
		$firstname = $_POST['FirstName'];
		$lastname = $_POST['LastName'];
		$address = $_POST['Address'];
		$district =  $_POST['District'];
		$zipcode = $_POST['Zipcode'];
		$balance = $_POST['Balance'];
		
		$sql = "INSERT INTO customer(CID,password, FirstName, LastName, Address, District, Zipcode, Balance) VALUES ('$cid' ,'$password','$firstname', '$lastname', '$address', '$district', '$zipcode' , '$balance')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Customer added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: customer.php');
?>