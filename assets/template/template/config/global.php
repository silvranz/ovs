<?php
	//$base_url = "http://" . $_SERVER['SERVER_NAME']; -> kalo di server (udah ada konfig servername di vhost)
	$base_url = "http://" . $_SERVER['SERVER_NAME'] ."/". explode("/",$_SERVER['REQUEST_URI'])[1]."/";
?>