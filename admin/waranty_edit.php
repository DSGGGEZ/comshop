<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$PID = $_POST['PID'];
		$CID = $_POST['CID'];
		$BoughtDate = $_POST['BoughtDate'];
		$WarantyExpire = $_POST['WarantyExpire'];

		$sql = "UPDATE iteminaccount SET PID = '$PID', CID = '$CID', BoughtDate = '$BoughtDate', WarantyExpire = '$WarantyExpire' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Waranty updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:waranty.php');

?>