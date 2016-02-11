
<!-- Modal Login -->
<div class="md-modal md-effect-1" id="modal-login">
	<div class="md-content">
		<div class="md-content-header">
			<div class="row">
				<div class="eleven columns">
					<h4>Login</h4>
				</div>
				<div class="one columns">
					<a href="#" class="md-close modal-close-button"></a>
				</div>
			</div>
		</div>

		<form id="loginForm" method="post" action="{{url("connection/login")}}">
			<div class="row">
				<div class="twelve columns">
					<label for="txtLoginEmail">Email</label>
					<input id="txtLoginEmail" name="txtLoginEmail" class="u-full-width" type="text" placeholder="Ketik email Anda disini &hellip;" />
				</div>
				<div class="twelve columns">
					<label for="txtLoginPassword">Password</label>
					<input id="txtLoginPassword" name="txtLoginPassword" class="u-full-width" type="password" placeholder="Ketik password Anda disini &hellip;" />
				</div>
				<div class="twelve columns taright">
					<input class="button-primary" type="submit" value="Login">
				</div>
				<div class="twelve columns taright">
					Belum punya akun ? <a href="#" class="md-trigger md-replace" data-modal="modal-register">Daftar</a>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Modal Register -->
<div class="md-modal md-effect-1" id="modal-register">
	<div class="md-content">
		<div class="md-content-header">
			<div class="row">
				<div class="eleven columns">
					<h4>Daftar</h4>
				</div>
				<div class="one columns">
					<a href="#" class="md-close modal-close-button"></a>
				</div>
			</div>
		</div>

		<form id="registerForm"  method="post" action="{{url("connection/register")}}">
			<div class="row">
				<div class="twelve columns">
					<label for="txtRegisterEmail">Email</label>
					<input id="txtRegisterEmail" class="u-full-width" type="text" placeholder="Ketik email Anda disini &hellip;" />
				</div>
				<div class="twelve columns">
					<label for="txtRegisterPassword">Password</label>
					<input id="txtRegisterPassword" class="u-full-width" type="password" placeholder="Ketik password Anda disini &hellip;" />
				</div>
				<div class="twelve columns">
					<label for="txtRegisterConfirmPassword">Konfirmasi Password</label>
					<input id="txtRegisterConfirmPassword" class="u-full-width" type="password" placeholder="Ketik konfirmasi password Anda disini &hellip;" />
				</div>
				<div class="twelve columns taright">
					<input class="button-primary" type="submit" value="Daftar">
				</div>
				<div class="twelve columns taright">
					Sudah punya akun ? <a href="#" class="md-trigger md-replace" data-modal="modal-login">Login</a>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- End Of Modal -->
