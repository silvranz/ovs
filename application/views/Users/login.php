<main class="bs-docs-masthead custom-top-bg" id="content" role="main">
	<div class="container">
		<div class="big-wrapper">
			<div class="row">
				<div class="col-sm-4">
					<div class="bg-white pd15">
						<h1 id="glyphicons" class="page-header">Login</h1>
						<form id="formLogin" role="form" action="users/login?redirect_after=template/find" class="ajax-form" data-reload="true" method="post" accept-charset="utf-8">
							<?php
									if( isset($alert) ) {
										echo $alert;
									}
							?>
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
						  					'placeholder' => 'Enter your email',
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
						  					'placeholder' => 'Enter your password',
						  				));
										echo form_error('password');
								?>
							</div>
							<div class="form-group">
								<?php
										echo tag('button', 'Sign In', array(
											'type' => 'submit',
											'class' => 'btn btn-success full-width',
										));
										echo '<br>';

										$registerLink = tag('span', 'New member ? Please ' . tag('a', '<u>Register</u>', array(
											'href' => $domain.'/users/register',
											'class' => 'fbold',
										)));
										echo tag('div', $registerLink, array(
											'class' => 'taright text-black',
										));
								?>
							</div>
							<div class="wrapper-social">
								<div class="mt5">
									<div class="wrapper-facebook wrapper-button">
										<a href="#" class="facebook-link">
											<div class="wrapper-inner">
												<span class="">Sign in with Facebook</span>
											</div>
										</a>
									</div>
								</div>
								<div class="mt5">
									<div class="wrapper-google wrapper-button">
										<a href="#" class="google-link">
											<div class="wrapper-inner">
												<span class="">Sign in with G+</span>
											</div>
										</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<!--
	<script type="text/javascript">
	  // Enter an API key from the Google API Console:
	  //   https://console.developers.google.com/apis/credentials?project=_
	  var apiKey = 'AIzaSyDzjax0rSWtzBB9s2yDw-nPREucENUE6zw';
	  // Enter a client ID for a web application from the Google API Console:
	  //   https://console.developers.google.com/apis/credentials?project=_
	  // In your API Console project, add a JavaScript origin that corresponds
	  //   to the domain where you will be running the script.
	  var clientId = '566770554578-mduac6t6074ag3k1565rfda91joog6gv.apps.googleusercontent.com';
	  // Enter one or more authorization scopes. Refer to the documentation for
	  // the API or https://developers.google.com/identity/protocols/googlescopes
	  // for details.
	  var scopes = 'profile';
	  var auth2; // The Sign-In object.
	  var authorizeButton = document.getElementById('authorize-button');
	  var signoutButton = document.getElementById('signout-button');
	  function handleClientLoad() {
		// Load the API client and auth library
		gapi.load('client:auth2', initAuth);
	  }
	  function initAuth() {
		gapi.client.setApiKey(apiKey);
		gapi.auth2.init({
			client_id: clientId,
			scope: scopes
		}).then(function () {
		  auth2 = gapi.auth2.getAuthInstance();
		  // Listen for sign-in state changes.
		  auth2.isSignedIn.listen(updateSigninStatus);
		  // Handle the initial sign-in state.
		  updateSigninStatus(auth2.isSignedIn.get());
		  authorizeButton.onclick = handleAuthClick;
		  signoutButton.onclick = handleSignoutClick;
		});
	  }
	  function updateSigninStatus(isSignedIn) {
		if (isSignedIn) {
		  authorizeButton.style.display = 'none';
		  signoutButton.style.display = 'block';
		  makeApiCall();
		} else {
		  authorizeButton.style.display = 'block';
		  signoutButton.style.display = 'none';
		}
	  }
	  function handleAuthClick(event) {
		auth2.signIn();
		updateSigninStatus(auth2.isSignedIn.get());
	  }
	  function handleSignoutClick(event) {
		auth2.signOut();
		updateSigninStatus(auth2.isSignedIn.get());
	  }
	  // Load the API and make an API call.  Display the results on the screen.
	  function makeApiCall() {
		/*gapi.client.load('people', 'v1', function() {
		  var request = gapi.client.people.people.get({
			resourceName: 'people/me'
		  });
		  request.execute(function(resp) {
			  console.log(resp);
			var p = document.createElement('p');
			var name = resp.names[0].givenName;
			p.appendChild(document.createTextNode('Hello, '+name+'!'));
			document.getElementById('content').appendChild(p);
		  });
		});*/
		// Note: In this example, we use the People API to get the current
		// user's name. In a real app, you would likely get basic profile info
		// from the GoogleUser object to avoid the extra network round trip.
		console.log(auth2.currentUser.get().getBasicProfile());
	  }
	</script>
	<script src="https://apis.google.com/js/api.js?onload=handleClientLoad"></script>
-->