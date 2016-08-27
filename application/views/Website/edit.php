<style>
	.tabs-left, .tabs-right {
	  border-bottom: none;
	  padding-top: 2px;
	}
	.tabs-left {
	  border-right: 1px solid #ddd;
	}
	.tabs-right {
	  border-left: 1px solid #ddd;
	}
	.tabs-left>li, .tabs-right>li {
	  float: none;
	  margin-bottom: 2px;
	}
	.tabs-left>li {
	  margin-right: -1px;
	}
	.tabs-right>li {
	  margin-left: -1px;
	}
	.tabs-left>li.active>a,
	.tabs-left>li.active>a:hover,
	.tabs-left>li.active>a:focus {
	  border-bottom-color: #ddd;
	  border-right-color: transparent;
	}

	.tabs-right>li.active>a,
	.tabs-right>li.active>a:hover,
	.tabs-right>li.active>a:focus {
	  border-bottom: 1px solid #ddd;
	  border-left-color: transparent;
	}
	.tabs-left>li>a {
	  border-radius: 4px 0 0 4px;
	  margin-right: 0;
	  display:block;
	}
	.tabs-right>li>a {
	  border-radius: 0 4px 4px 0;
	  margin-right: 0;
	}.tabs-left, .tabs-right {
	  border-bottom: none;
	  padding-top: 2px;
	}
	.tabs-left {
	  border-right: 1px solid #ddd;
	}
	.tabs-right {
	  border-left: 1px solid #ddd;
	}
	.tabs-left>li, .tabs-right>li {
	  float: none;
	  margin-bottom: 2px;
	}
	.tabs-left>li {
	  margin-right: -1px;
	}
	.tabs-right>li {
	  margin-left: -1px;
	}
	.tabs-left>li.active>a,
	.tabs-left>li.active>a:hover,
	.tabs-left>li.active>a:focus {
	  border-bottom-color: #ddd;
	  border-right-color: transparent;
	}

	.tabs-right>li.active>a,
	.tabs-right>li.active>a:hover,
	.tabs-right>li.active>a:focus {
	  border-bottom: 1px solid #ddd;
	  border-left-color: transparent;
	}
	.tabs-left>li>a {
	  border-radius: 4px 0 0 4px;
	  margin-right: 0;
	  display:block;
	}
	.tabs-right>li>a {
	  border-radius: 0 4px 4px 0;
	  margin-right: 0;
	}

	.wrapper-product-setting table thead tr th:last-child {
		text-align: center;
	}
	.wrapper-product-setting table tbody tr td {
		vertical-align: middle;
	}

	.tab-heading {
		padding-bottom: 20px;
		border-bottom: 1px solid #DDDDDD;
	}
	.aboutus-item {
		border-bottom: 1px solid #DDDDDD;
	}
	.contactus-item {
		padding: 15px; 
		border: 1px solid #DDDDDD;
		margin-bottom: 20px;
	}
</style>

<div class="container" id="container" store="<?=$request["storeId"]?>">
	<div class="row">
		<div class="col-sm-12">
			<h2>Thelana</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<ul class="nav nav-tabs tabs-left sideways">
				<?php
					$count = count($request['listMenu']);
					$tempName = "";
					for($i=0;$i<$count;$i++){
						$tempName = $request['listMenu'][$i]->MenuName;
						$targetId = strtolower(str_replace(" ","",$request['listMenu'][$i]->MenuName));
						echo '<li'.($i==0?' class="active"':'').'><a href="#'.$targetId.'" data-toggle="tab">'.$tempName.'</a></li>';
					}
				?>
	        </ul>
		</div>
		<div class="col-sm-10">
			<!-- Tab panes -->
          	<div class="tab-content">
				<div class="tab-pane active" id="generalsetting">
					<h3 class="no-mg tab-heading">General Setting</h3>
					<div class="wrapper-general-setting mt20">
						<form class="form-horizontal" role="form">
						  	<div class="form-group">
						    	<label class="col-sm-2 control-label taleft">Website Name</label>
						    	<span class="col-sm-1 control-label taleft">:</span>
						      	<span class="col-sm-9 control-label taleft"><?=$request['generalSetting']['name']?> ( <a href="#"><b>www.thelanashop.com</b></a> )</span>
						  	</div>
						  	<div class="form-group">
						    	<label class="col-sm-2 control-label taleft">Logo</label>
						    	<span class="col-sm-1 control-label taleft">:</span>
						      	<span class="col-sm-9 control-label taleft">
						      		<img src="<?php echo $domain; ?>/assets/images/placeholder/logo.jpg" style="width: 150px;" />
						      		<div class="mt10">
						      			<button type="button" class="btn btn-primary">
						      				<span class="glyphicon glyphicon-plus"></span>
						      				Upload New
						      			</button>
						      		</div>
						      	</span>
						  	</div>
						  	<div class="form-group">
						    	<label class="col-sm-2 control-label taleft">Home Banner</label>
						    	<span class="col-sm-1 control-label taleft">:</span>
						      	<span class="col-sm-9 control-label taleft">
						      		<img src="<?php echo $domain; ?>/assets/images/placeholder/banner.png" style="width: 320px;" />
						      		<div class="mt10">
						      			<button type="button" class="btn btn-primary">
						      				<span class="glyphicon glyphicon-plus"></span>
						      				Upload New
						      			</button>
						      		</div>
						      	</span>
						  	</div>
						  	<div class="form-group">
						    	<div class="col-sm-offset-3 col-sm-9">
						      		<button type="submit" class="btn btn-success">Save My Settings</button>
						    	</div>
						  	</div>
						</form>
					</div>
				</div>
				<div class="tab-pane" id="product">
					<div>
						<h3 class="no-mg pull-left">Product</h3>
						<h4 class="no-mg pull-right">
							<button type="submit" class="btn btn-success">
								<span class="glyphicon glyphicon-plus"></span>
								Add New Product
							</button>
						</h4>
					</div>		
					<div class="clearfix tab-heading"></div>

					<div class="wrapper-product-setting">
						<table class="table table-striped mt20">
							<thead>
								<tr>
									<th>Image</th>
									<th>Product Name</th>
									<th>Product Desc</th>
									<th>Category</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$countProduct = count($request["Product"]);
									for($i=0;$i<$countProduct;$i++){
								?>
								<tr dataTag="<?=$request["Product"][$i]->prod_id?>">
									<td>
										<img src="<?php echo $domain; ?>/assets/images/placeholder/image.png" style="width: 120px;" />
									</td>
									<td><?=$request["Product"][$i]->prod_name?></td>
									<td><?=$request["Product"][$i]->prod_desc?></td>
									<td><?=$request["Product"][$i]->prod_cat_name?></td>
									<td>
										<a href="#" class="fbold">Edit</a>
										<span>|</span>
										<a href="#" class="fbold">Delete</a>
									</td>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane" id="aboutus">
					<div>
						<h3 class="no-mg pull-left">About Us</h3>
						<h4 class="no-mg pull-right">
							<button type="submit" id="triggerPopup" class="btn btn-success" data-toggle="modal" data-target="#myModal">
								<span class="glyphicon glyphicon-plus"></span>
								Add New
							</button>
						</h4>
					</div>		
					<div class="clearfix tab-heading"></div>

					<div class="wrapper-aboutus-setting mb20">
						<?php 
							$countAbout = count($request["aboutUs"]);
							for($i=0;$i<$countAbout;$i++){
						?>
						<div class="aboutus-item mt20 pb20" dataTag="<?=$request["aboutUs"][$i]->aboutus_id?>">
							<h4><b><?=$request["aboutUs"][$i]->aboutus_title?></b></h4>
							<p><?=$request["aboutUs"][$i]->aboutus_desc?></p>
							<div class="wrapper-action">
								<a href="#" class="fbold editButton">Edit</a>
								<span>|</span>
								<a href="#" class="fbold delButton">Delete</a>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
				<div class="tab-pane" id="contactus">
					<h3 class="no-mg tab-heading">Contact Us</h3>
					<div class="wrapper-contactus-setting mt20 pb20">
						<?php 
							$countContact = count($request["ContactUs"]);
						for($i=0;$i<$countContact;$i++){?>
						<div class="contactus-item" dataTag="<?=$request["ContactUs"][$i]->contactus_id?>">
							<form class="form-horizontal" role="form">
							  	<div class="form-group">
							    	<label class="col-sm-1 control-label taleft">Name</label>
							    	<span class="col-sm-1 control-label taleft">:</span>
							      	<span class="col-sm-10 control-label taleft"><?=$request["ContactUs"][$i]->contactus_name?></span>
							  	</div>
							  	<div class="form-group">
							    	<label class="col-sm-1 control-label taleft">Email</label>
							    	<span class="col-sm-1 control-label taleft">:</span>
							      	<span class="col-sm-10 control-label taleft"><?=$request["ContactUs"][$i]->contactus_email?></span>
							  	</div>
							  	<div class="form-group">
							    	<label class="col-sm-1 control-label taleft">Message</label>
							    	<span class="col-sm-1 control-label taleft">:</span>
							      	<span class="col-sm-10 control-label taleft">
							      		<p><?=$request["ContactUs"][$i]->contactus_message?></p>
							      	</span>
							  	</div>
							</form>
						</div>
						<?php }?>
					</div>
				</div>
          	</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h4 class="modal-title" id="myModalLabel">Add / Edit About Us</h4>
      		</div>
	      	<div class="modal-body">
	       		 <form class="form-horizontal" role="form">
				  	<div class="form-group">
				    	<label class="col-sm-2 control-label taleft">Title</label>
				      	<span class="col-sm-10">
				      		<input type="text" class="form-control" id="titleTxt"/>
				      	</span>
				  	</div>
				  	<div class="form-group">
				    	<label class="col-sm-2 control-label taleft">Content</label>
				      	<span class="col-sm-10">
				      		<textarea class="form-control" rows="5" id="contentTxt"></textarea>
				      	</span>
				  	</div>
				</form>
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	<button type="button" class="btn btn-success" id="customAboutUs">Save</button>
	      	</div>
    	</div>
  	</div>
</div>