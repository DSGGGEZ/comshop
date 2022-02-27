<?php
	include 'includes/session.php';

	$CID = $_SESSION['customer'];
	$PID = $_GET['PID'];
	$Price = $_GET['Price'];

	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$BoughtDate = date('Y-m-d');
		$WarantyExpire = date('Y-m-d', strtotime($BoughtDate .'+3 years'));

		$sql = "INSERT INTO iteminaccount(PID, CID, BoughtDate, WarantyExpire) VALUES ('$PID', '$CID', '$BoughtDate', '$WarantyExpire')";
		$delcost = "UPDATE customer SET Balance = Balance-'$Price' WHERE CID = '$CID'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Buy successfully';
			header('location: index.php');
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Need more information';
	}
	$_SESSION['success'] = 'Buy successfully';
	echo "<script type='text/javascript'>alert('Buy successfully');</script>";
	header('location: index.php');

?>
