<main class="bs-docs-masthead custom-top-bg" id="content" role="main">
	<div class="container">
		<div class="big-wrapper">
			<div class="row">
				<div class="col-sm-4">
					<div class="bg-white pd15">
						<h1 id="glyphicons" class="page-header">Register</h1>
						<form id="formRegister" role="form" action="users/register?redirect_after=template/find" class="ajax-form" data-reload="true" method="post" accept-charset="utf-8">
							<?php
									if( isset($alert) ) {
										echo $alert;
									}
							?>
							<div class="form-group">
								<?php
										echo tag('label', 'Full name', array(
						  					'for' => 'fullname',
						  					'class' => 'control-label',
						  				));
						  				echo tag('input', false, array(
						  					'type' => 'text',
						  					'name' => 'fullname',
						  					'class' => 'form-control',
						  					'placeholder' => 'Full name',
						  				));
										echo form_error('fullname');
								?>
							</div>
							<div class="form-group">
								<?php
										echo tag('label', 'Email', array(
						  					'for' => 'email',
						  					'class' => 'control-label',
						  				));
						  				echo tag('input', false, array(
						  					'type' => 'text',
						  					'name' => 'email',
						  					'class' => 'form-control',
						  					'placeholder' => 'Email',
						  				));
										echo form_error('email');
								?>
							</div>
							<div class="form-group">
								<?php
										echo tag('label', 'Password', array(
						  					'for' => 'password',
						  					'class' => 'control-label',
						  				));
						  				echo tag('input', false, array(
						  					'type' => 'password',
						  					'name' => 'password',
						  					'class' => 'form-control',
						  					'placeholder' => 'Password',
						  				));
										echo form_error('password');
								?>
							</div>
							<div class="form-group">
								<label for="gender" class="control-label">Gender</label>
								<select class="form-control" name="gender">
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
							<div class="form-group">
								<label for="country" class="control-label">Country</label>
								<?php
										echo form_dropdown('CountryID', $countries, (isset($request['CountryID'])?$request['CountryID']:false), 'class="form-control"');
										echo form_error('CountryID'); 
								?>
							</div>
							<button type="submit" class="btn btn-success full-width">Sign Up</button>
						</form>
					</div>
				</div>
				<div class="col-sm-8">
				</div>
			</div>
		</div>
	</div>
</main>