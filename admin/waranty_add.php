<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$PID = $_POST['PID'];
		$CID = $_POST['CID'];
		$BoughtDate = $_POST['BoughtDate'];
		$WarantyExpire = $_POST['WarantyExpire'];

		$sql = "INSERT INTO iteminaccount(PID, CID, BoughtDate, WarantyExpire) VALUES ('$PID', '$CID', '$BoughtDate', '$WarantyExpire')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Waranty added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Need more information';
	}

	header('location: waranty.php');

?>