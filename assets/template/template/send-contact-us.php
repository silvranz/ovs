<?php 
	include("config/global.php");
	$sql = "INSERT INTO contactus (contactus_name, contactus_email, contactus_message, contactus_isread, contactus_date) 
			VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['message']."', 1, CURRENT_TIMESTAMP())";
	$result = $conn->query($sql);
?>