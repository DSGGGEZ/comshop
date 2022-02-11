<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$caseid = $_POST['CaseID'];
		$casetype = $_POST['CaseType'];
		$fixtime = $_POST['FixTime'];
		
		$sql = "INSERT INTO casetype(CaseID, CaseType, FixTime) VALUES ('$caseid', '$casetype','$fixtime')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Casetype added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: casetype.php');

?>