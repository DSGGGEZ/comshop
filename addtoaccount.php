<?php
require('session.php');

    // Get the current basket
    if(isset($_POST['add'])){
		$pid = $_POST['PID'];
		$cid = $_POST['CID'];
        $boughtdate = $_POST['datetime'];
        $warantyexpire = $_POST['WarantyExpire']
		
		$sql = "INSERT INTO iteminaccount(PID, CID, BoughtDate,WarantyExpire) VALUES ('$pid', '$cid','$boughtdate','$boughtdate+3')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Item added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

header('Location: index.php');
exit();
