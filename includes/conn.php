<?php
	$conn = new mysqli('localhost', 'root', '', 'comshop');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

?>
