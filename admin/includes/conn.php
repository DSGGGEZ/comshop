<?php
	$conn = new mysqli('localhost', 'root', '0956327560', 'comshop');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

?>
