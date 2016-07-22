<div class="container">
	<div class="big-wrapper pb15">
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-5">
					<div class="wrapper-static bg-white">
						<h3 class="header">
							Login
						</h3>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter your email" />
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Enter your password" />
					</div>
					<div class="form-group">
						<button class="btn btn-success full-width">Sign In</button>
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
				</div>
				<div class="col-sm-2"></div>
				<div class="col-sm-5">
					<div class="wrapper-static bg-white">
						<h3 class="header">
							Register
						</h3>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Full name" />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Email" />
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" />
					</div>
					<div class="form-group">
						<select class="form-control">
							<option value="">-- Please select your gender --</option>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control">
							<option value="">-- Please select your country --</option>
						</select>
					</div>
					<button class="btn btn-success col-sm-12">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
</div>
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