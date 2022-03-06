<?php
	include 'includes/conn.php';
	session_start();

	if(isset($_SESSION['customer'])){
		$sql = "SELECT * FROM customer WHERE CID = CID";
		$query = $conn->query($sql);
		$student = $query->fetch_assoc();
	}

?>