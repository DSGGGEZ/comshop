<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$ctid = $_POST['CTID'];
		$cid = $_POST['CID'];
		$caseid = $_POST['CaseID'];
		$casedate =  $_POST['CaseDate'];
		$casetype = $_POST['CaseType'];
		$detail = $_POST['Detail'];
		
		$sql = "INSERT INTO fixorder(CTID, CID, CaseID, CaseDate, CaseType, Detail) VALUES ('$ctid', '$cid', '$caseid', '$casedate', '$casetype' , '$detail')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Fixorder added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: fixorder.php');
?>