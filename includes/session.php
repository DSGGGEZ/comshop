<?php
	include 'includes/conn.php';
	session_start();

	if(isset($_SESSION['customer'])){
		$sql = "SELECT * FROM customer WHERE CID = '".$_SESSION['CID']."'";
		$query = $conn->query($sql);
		$student = $query->fetch_assoc();
	}

?>