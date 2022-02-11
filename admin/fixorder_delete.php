<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM fixorder WHERE fixorder.id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Fixorder Rejected';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Something wrong';
	}

	header('location: fixorder.php');
?>