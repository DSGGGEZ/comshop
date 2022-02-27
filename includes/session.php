<?php
	include 'includes/conn.php';
	session_start();

	if(isset($_SESSION['customer'])){
		$cid=$_SESSION['customer'];
		$sql = "SELECT * FROM customer WHERE CID = $cid";
		$query = $conn->query($sql);
		$customer = $query->fetch_assoc();
	}

?>