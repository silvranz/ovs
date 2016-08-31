<?php
	$projectName = explode("/",$_SERVER['REQUEST_URI'])[1];
	//$base_url = "http://" . $_SERVER['SERVER_NAME']; -> kalo di server (udah ada konfig servername di vhost)
	$base_url = "http://" . $_SERVER['SERVER_NAME'] .":". $_SERVER["SERVER_PORT"] ."/". explode("/",$_SERVER['REQUEST_URI'])[1]."/";
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	$conn->query("use ".$projectName);
	$sql = "SELECT genset_content FROM genset WHERE genset_type='logo'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$logo = $result->fetch_assoc()["genset_content"];
	}

	// Check connection
	/*if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	*/
?>