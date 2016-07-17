{% block content %}
<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div class="about no-pd-bottom">
	<div class="container">
		<div class="row">
			<div class="six columns">
				<h1 style="color:#0066cc">Template</h1>
			</div>
		</div>
	</div>
</div>

<div class="container">

	<div class="row">
		<div id="store-template-filter" class="four columns">
			<input type="text" class="u-full-width" placeholder="Cari berdasarkan judul atau deskripsi &hellip;" />

			<div style="width: 100%; height: auto;">
				<ul>
					<li><a href="#">New Arrival</a></li>
					<li><a href="#">Most Popular</a></li>
				</ul>
				<hr>
				<h4>Kategori</h4>
				<ul>
					<li class="parent">
						<a href="#">Clothes Store</a>
						<ul class="sub">
							<li><a href="#">Sub Item</a></li>
							<li><a href="#">Sub Item</a></li>
						</ul>
					</li>
					<li class="parent"><a href="#">Music Store</a></li>
					<li class="parent"><a href="#">Personal Page</a></li>
					<li class="parent"><a href="#">Music Store</a></li>
					<li class="parent"><a href="#">Wedding Invitation</a></li>
				</ul>
			</div>
		</div>
		<div class="eight columns">
			<div>
				<ul>
					<li style="margin: 5px 10px; display:inline-block; width:280px; border:1px solid #D1D1D1; height:auto; border-radius: 5px;">
						<div style="text-align:center; width: auto; margin-top:10px;">Dark Clothes Store</div>
						<div style="margin:5px; border: 1px solid #000; width:auto; height:150px;">
							<img style="width: 100%; height: 170px;" src="source/images/templatepreview/sample.png" />
						</div>
						<div style="margin-top: 30px;">
							<div class="row">
								<div class="six columns tacenter">
									<a href="#" class="button button-primary">Preview</a>
								</div>
								<div class="six columns tacenter">
									<a style="width:120px" href="#" class="button button-primary editButton">Edit</a>
								</div>
							</div>
						</div>
						<div>
							<div class="row">
								<div class="eight columns">
									<div class="rating">
										<span>&#9734;</span>
										<span>&#9734;</span>
										<span>&#9734;</span>
										<span>&#9734;</span>
										<span>&#9734;</span>
									</div>
								</div>
								<div class="four columns pt8">
									<span>100 user(s)</span>
								</div>
							</div>
						</div>
					</li>
					<li style="margin: 5px 10px; display:inline-block; width:280px; border:1px solid #D1D1D1; height:auto; border-radius: 5px;">
						<div style="text-align:center; width: auto; margin-top:10px;">Dark Clothes Store</div>
						<div style="margin:5px; border: 1px solid #000; width:auto; height:150px;">
							<img style="width: 100%; height: 170px;" src="source/images/templatepreview/sample.png" />
						</div>
						<div style="margin-top: 30px;">
							<div class="row">
								<div class="six columns tacenter">
									<a href="#" class="button button-primary">Preview</a>
								</div>
								<div class="six columns tacenter">
									<a style="width:120px" href="#" class="button button-primary editButton">Edit</a>
								</div>
							</div>
						</div>
						<div>
							<div class="row">
								<div class="eight columns">
									<div class="rating">
										<span>&#9734;</span>
										<span>&#9734;</span>
										<span>&#9734;</span>
									</div>
								</div>
								<div class="four columns pt8">
									<span>23 user(s)</span>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>

			<div class="wrapper-pagination" style="float:right;">
				<ul class="pagination">
					<li><a href="">&laquo;</a></li>
					<li><a href="">&lsaquo;</a></li>
					<li><a href="#" class="active">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li><a href="">5</a></li>
					<li><a href="">&rsaquo;</a></li>
					<li><a href="">&raquo;</a></li>
				</ul>
			</div>
		</div>	
	</div>
</div>
{% endblock %}