<?php
	include("config/global.php");
	$sql = "SELECT genset_content FROM genset WHERE genset_type='home_banner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$banner = $result->fetch_assoc()["genset_content"];
	}
	$sql = "SELECT prod_name,prod_desc, prod_image FROM prod p ORDER BY UNIX_TIMESTAMP(prod_date) DESC LIMIT 2";
	$result = $conn->query($sql);
	$newestProduct = [];
	if ($result->num_rows > 0) {
		array_push($newestProduct,$result->fetch_assoc());
	}
	$countNewest = count($newestProduct);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Testing</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"></link>
		<link rel="stylesheet" href="css/main.css"></link>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body ><!--pinknya: #ffb6c1, greynya #999999-->
		<div class="container">
			<div class="row">
				<img class="col-sm-2 col-sm-offset-5" src="images/<?=$logo?>"></img>
				<h3 class="col-sm-6 col-sm-offset-3 text-center">Header</h3>
			</div>
		</div>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="col-sm-6 col-sm-offset-3 list-inline">
					<li class="col-sm-3"><a href="<?=$base_url?>index.php"><h4>Home</h4></a></li>
					<li class="col-sm-3"><a href="<?=$base_url?>about-us.php"><h4>About Us</h4></a></li>
					<li class="col-sm-3"><a href="<?=$base_url?>product-list.php"><h4>Products</h4></a></li>
					<li class="col-sm-3"><a href="<?=$base_url?>contact-us.php"><h4>Contact Us</h4></a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<img class="col-sm-12 banner" src="images/<?=$banner?>">
				<h3 class="col-sm-12 header">Our Newest Product</h3>
				<?php for($i=0;$i<$countNewest;$i++){?>
				<div class="newestProduct col-sm-6">
					<img class="col-sm-4" src="images/<?=$newestProduct[$i]["prod_image"]?>">
					<div class="col-sm-8">
						<h4><?=$newestProduct[$i]["prod_name"]?></h4>
						<p><?=$newestProduct[$i]["prod_desc"]?></p>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
		<footer class="bs-docs-footer"> 
		<h4 class="text-center">Copyright © 2016 Oversign. All rights reserved</h4>
		</footer>
	</body>
</html>
<?php include("config/end.php") ?>