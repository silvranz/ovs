<?php include("config/global.php") ?>
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
				<img class="col-sm-2 col-sm-offset-5" src="images/a.jpg"></img>
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
				<h3>Product Detail</h3>
				<div class="col-sm-12">
					<img class="col-sm-4" src="images/a.jpg"/>
					<div class="col-sm-8">
						<h4>Product <?=$_GET["item"]?></h4>
						<p>Category: whole cake</p>
						<p>Description</p>
					</div>
				</div>
				<h3 class="col-sm-12 header">Our Newest Product</h3>
				<div class="newestProduct col-sm-6">
					<img class="col-sm-4" src="images/a.jpg">
					<div class="col-sm-8">
						<h4>Product Title 1</h4>
						<p>A product description.A product description.A product description.A product description.</p>
					</div>
				</div>
				<div class="newestProduct col-sm-6">
					<img class="col-sm-4" src="images/a.jpg">
					<div class="col-sm-8">
						<h4>Product Title 1</h4>
						<p>A product description.A product description.A product description.A product description.</p>
					</div>
				</div>
			</div>
		</div>
		<footer class="bs-docs-footer"> 
		<h4 class="text-center">Copyright © 2016 Oversign. All rights reserved</h4>
		</footer>
	</body>
</html>