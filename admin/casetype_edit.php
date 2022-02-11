<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$caseid = $_POST['CaseID'];
		$casetype = $_POST['CaseType'];
		$fixtime = $_POST['FixTime'];

		$sql = "UPDATE casetype SET CaseID = '$caseid' , CaseType = '$casetype' , FixTime = '$fixtime' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Casetype updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:casetype.php');

?>