<?php include("config/global.php");?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?=$projectName?></title>
		<link rel="stylesheet" href="css/bootstrap.min.css"></link>
		<link rel="stylesheet" href="css/main.css"></link>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>$(function(){
			$("#contactUsForm").submit(function(e){
				e.preventDefault();
				$.ajax({
					url:"<?=$base_url?>send-contact-us.php",
					type:"POST",
					data:{
						name:$("#nameContact").val(),
						email:$("#emailContact").val(),
						message:$("#messageTxt").text()
					}
				})
			})
		})</script>
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
				<h3>Contact Us</h3>
				<form id="contactUsForm">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="form-group">
						<label>Your name</label>
						<input class="form-control" type="text" placeholder="Input your name here" id="nameContact"/>
					</div>
					<div class="form-group">
						<label>Your email</label>
						<input class="form-control" type="text" placeholder="Input your email here"  id="emailContact"/>
					</div>
					<div class="form-group">
						<label>Your message</label>
						<textarea class="form-control" rows="5" placeholder="Input your message here"  id="messageTxt"/></textarea>
					</div>
					<div class="form-group">
						<input class="form-control" type="submit" value="Submit" />
					</div>
				</div>
				</form>
			</div>
		</div>
		<footer class="bs-docs-footer"> 
		<h4 class="text-center">Copyright © 2016 Oversign. All rights reserved</h4>
		</footer>
	</body>
</html>
<?php include("config/end.php") ?>