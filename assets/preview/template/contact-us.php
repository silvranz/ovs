<!DOCTYPE HTML>
<html>
	<head>
		<title>Testing</title>
		<link rel="stylesheet" href="<?=$page_base?>css/bootstrap.min.css"></link>
		<link rel="stylesheet" href="<?=$page_base?>css/main.css"></link>
		<script src="<?=$page_base?>js/jquery.min.js"></script>
		<script src="<?=$page_base?>js/bootstrap.min.js"></script>
	</head>
	<body ><!--pinknya: #ffb6c1, greynya #999999-->
		<div class="container">
			<div class="row">
				<img class="col-sm-2 col-sm-offset-5" src="<?=$page_base?>images/a.jpg"></img>
				<h3 class="col-sm-6 col-sm-offset-3 text-center">Header</h3>
			</div>
		</div>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="col-sm-6 col-sm-offset-3 list-inline">
					<li class="col-sm-3"><a href="index.php"><h4>Home</h4></a></li>
					<li class="col-sm-3"><a href="about-us.php"><h4>About Us</h4></a></li>
					<li class="col-sm-3"><a href="product-list.php"><h4>Products</h4></a></li>
					<li class="col-sm-3"><a href="contact-us.php"><h4>Contact Us</h4></a></li>
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