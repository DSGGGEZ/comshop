<?php
	include 'includes/session.php';

	if(isset($_POST['login'])){
		$cid= $_POST['CID'];
		$password= $_POST['password'];
		$sql = "SELECT * FROM customer where (CID ='".$cid;
		$sql .= "' and password='".$password."')";
		$query = $conn->query($sql);
		
		if($query->num_rows > 0){
			$row = $query->fetch_assoc();
			$_SESSION['customer'] = $row['CID'];
			header('location: index.php?');
		}
		else{
			$_SESSION['error'] = 'Customer not found';
			header('location: index.php');
		}

	}
	else{
		$_SESSION['error'] = 'Enter customer id first';
		header('location: index.php');
	}


?>