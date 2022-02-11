<?php
	include 'includes/session.php';

	if(isset($_POST['com'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM fixorder WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Fixorder finished';
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