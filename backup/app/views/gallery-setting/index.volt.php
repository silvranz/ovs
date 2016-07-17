<div class="site-list wrapper-item-setting">
	<div class="container">

		<div class="row">
			<div class="twelve columns">
				<div class="row">
					<div class="twelve columns">
						<h3 class="floleft">Pengaturan Gallery</h3>
				  		<a class="button button-success floright mt5" href="editor.html">Tambah Foto Baru</a>
					</div>
				</div>
				<div class="row">
					<div id="setting-item-filter" class="two columns">
						<div style="width: 100%; height: auto;">
							<ul>
								<li><a class="active" href="#">Gallery Setting</a></li>
								<li><a href="#">Article Setting</a></li>
							</ul>
							<hr>
						</div>
					</div>
					<div class="ten columns">
						<table class="u-full-width">
							<thead>
								<tr>
									<th>Image</th>
									<th>Image Title</th>
									<th>Image Description</th>
									<th>Image Category</th>
									<th class="tacenter">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<img src="<?= $this->url->get('images/clothes.jpg') ?>">
									</td>
									<td>Sample Title</td>
									<td>Sample Description</td>
									<td>Category 1</td>
									<td class="tacenter">
										<a href="#">Edit</a> |
										<a href="#">Delete</a>
									</td>
								</tr>
								<tr>
									<td>
										<img src="<?= $this->url->get('images/clothes.jpg') ?>">
									</td>
									<td>Sample Title</td>
									<td>Sample Description</td>
									<td>Category 1</td>
									<td class="tacenter">
										<a href="#">Edit</a> |
										<a href="#">Delete</a>
									</td>
								</tr>
								<tr>
									<td>
										<img src="<?= $this->url->get('images/clothes.jpg') ?>">
									</td>
									<td>Sample Title</td>
									<td>Sample Description</td>
									<td>Category 1</td>
									<td class="tacenter">
										<a href="#">Edit</a> |
										<a href="#">Delete</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="row">
					<div class="ten columns">
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
		</div>
	</div>
</div>